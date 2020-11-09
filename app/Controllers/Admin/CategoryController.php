<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once COMMON . '/Request.php';
require_once MODELS . '/Category.php';


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
        $status = $this->request->data['status'] ? 1:0;
        (new Category())->store(["name"=>$this->request->data['name'], 'status'=>$status]);
        return header('Location: /admin/categories');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "Category Detail";
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/show', compact('title','category'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Category Edit";
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/edit', compact('title','category'), 'admin');
    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        (new Category())->update($this->request->data['id'],['name'=>$this->request->data['name'], 'status'=>$status]);
        return header('Location: /admin/categories');
    }

    public function destroy($vars)
    {
        $title = "Category Delete";
        extract($vars);
        if(isset($_POST['submit'])){
            (new Category())->destroy($id);
            return header('Location: /admin/categories');
        }elseif (isset($_POST['reset'])){
            var_dump($_POST);
            return header('Location: /admin/categories');
        }
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/delete', compact('title','category'), 'admin');
    }

}