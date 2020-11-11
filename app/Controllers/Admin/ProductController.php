<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once COMMON . '/Request.php';
require_once MODELS . '/Product.php';
require_once MODELS . '/Category.php';
require_once MODELS . '/Brand.php';


class ProductController extends Controller
{

    public function index()
    {
        $title = "Product List";
        $products = (new Product())->all();
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $this->view->render('admin/products/index', compact('title', 'products','categories','brands'), 'admin');
    }

    public function create()
    {
        $title = "Create Product";
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $this->view->render('admin/products/create', compact('title', 'categories', 'brands'), 'admin');
    }

    public function store()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        $new = $this->request->data['new'] ? 1 : 0;
        $recommended = $this->request->data['recommended'] ? 1 : 0;
        $brand = $this->request->data['brand_id'];
        $category = $this->request->data['category_id'];
        (new Product())->store(['name' => $this->request->data['name'], 'price' => $this->request->data['price'], 'description' => $this->request->data['description'], 'status' => $status, 'brand_id' => $brand, 'category_id' => $category, 'is_new' => $new, 'is_recommended' => $recommended]);
        return header('Location: /admin/products');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "Product Detail";
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $product = (new Product())->getByPK($id);
        $this->view->render('admin/products/show', compact('title', 'product','categories','brands'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Product Edit";
        $product = (new Product())->getByPK($id);
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $this->view->render('admin/products/edit', compact('title', 'product','brands','categories'), 'admin');

    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        $new = $this->request->data['new'] ? 1 : 0;
        $recommended = $this->request->data['recommended'] ? 1 : 0;
        $brand = $this->request->data['brand_id'];
        $category = $this->request->data['category_id'];
        (new Product())->update($this->request->data['id'],['name' => $this->request->data['name'], 'price' => $this->request->data['price'], 'description' => $this->request->data['description'], 'status' => $status, 'brand_id' => $brand, 'category_id' => $category, 'is_new' => $new, 'is_recommended' => $this->$recommended]);
        return header('Location: /admin/products');
    }

    public function destroy($vars)
    {
        $title = "Product Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            (new Product())->destroy($id);
            return header('Location: /admin/products');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/products');
        }
        $product = (new Product())->getByPK($id);
        $this->view->render('admin/products/delete', compact('title', 'product'), 'admin');
    }

}