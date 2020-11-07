<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once COMMON.'/Request.php';
require_once MODELS.'/Category.php';


class CategoryController extends Controller
{
    public function index()
    {
        $title = "Categories List";
        $categories = (new Category())->all();
        $this->view->render('admin/categories/index', compact('title','categories'), 'admin');
    }

    public function create()
    {
        $title = "Create Category";
        $this->view->render('admin/categories/create', compact('title'), 'admin');
    }

    public function store()
    {
        $status = $this->request->data['status'] ? 1:0;
        (new Category())->store($this->request->data['name'],$status);
        return header('Location: /admin/categories');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}