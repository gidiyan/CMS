<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once COMMON . '/Request.php';
require_once MODELS . '/Category.php';
require_once COMMON . '/Helper.php';


class CategoryController extends Controller
{
    public function index()
    {
        $title = "Categories List";
        $categories = (new Category())->all();
        $this->view->render('admin/categories/index', compact('title', 'categories'), 'admin');
    }

    public function create()
    {
        $title = "Create Category";
        $this->view->render('admin/categories/create', compact('title'), 'admin');
    }

    public function store()
    {
      (new Category())->store(["name" => $this->request->data['name'], 'status' => $status, "image" => $this->request->data['file_name']]);
        return header('Location: /admin/categories');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "Category Detail";
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/show', compact('title', 'category'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Category Edit";
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/edit', compact('title', 'category'), 'admin');
    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        if (!empty($this->request->data['image'])) {
            $category = (new Category())->getByPK($this->request->data['id']);
            $imageName = Helper::asset('categories', $category->image);
            if(file_exists($imageName)){
                unlink($imageName);
            }
        }
        (new Category())->update($this->request->data['id'], ['name' => $this->request->data['name'], 'status' => $status, "image" => $this->request->data['file_name']]);
        return header('Location: /admin/categories');
    }

    public function destroy($vars)
    {
        $title = "Category Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            $category = (new Category())->getByPK($id);
            $image = $category->image;
            if (file_exists(ROOT . 'public/assets/images/categories/' . $image)) {
                unlink(ROOT . 'public/assets/images/categories/' . $image);
            }
            (new Category())->destroy($id);
            return header('Location: /admin/categories');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/categories');
        }
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/delete', compact('title', 'category'), 'admin');
    }

    public function insertImage()
    {
        if (!empty($this->request->data['image'])) {
            list($file, $filename) = $this->fileName($this->request->data['image']);
            $uploaded = Helper::asset('categories', $filename);
            file_put_contents($uploaded, $file);
        }
        echo $filename;
    }

    private function fileName($file)
    {
        $image_array_1 = explode(";", $file);
        $image_array_2 = explode(",", $image_array_1[1]);
        $file = base64_decode($image_array_2[1]);
        return [$file, sha1(mt_rand(1, 9999) . uniqid()) . time()];
    }
}