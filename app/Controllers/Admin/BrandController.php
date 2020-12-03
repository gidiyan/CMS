<?php

class BrandController extends Controller
{
    public function index()
    {
        $title = "Brand List";
        $brands = (new Brand())->all();
        $this->view->render('admin/brands/index', compact('title', 'brands'), 'admin');
    }

    public function create()
    {
        $title = "Create Brand";
        $this->view->render('admin/brands/create', compact('title'), 'admin');
    }

    public function store()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        (new Brand())->store(["name" => $this->request->data['name'], 'status' => $status]);
        return header('Location: /admin/brands');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "Brand Detail";
        $brand = (new Brand())->getByPK($id);
        $this->view->render('admin/brands/show', compact('title', 'brand'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Brand Edit";
        $brand = (new Brand())->getByPK($id);
        $this->view->render('admin/brands/edit', compact('title', 'brand'), 'admin');
    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1 : 0;
        (new Brand())->update($this->request->data['id'], ['name' => $this->request->data['name'], 'status' => $status]);
        return header('Location: /admin/brands');
    }

    public function destroy($vars)
    {
        $title = "Brand Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            (new Brand())->destroy($id);
            return header('Location: /admin/brands');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/brands');
        }
        $brand = (new Brand())->getByPK($id);
        $this->view->render('admin/brands/delete', compact('title', 'brand'), 'admin');
    }

}