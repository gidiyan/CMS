<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once MODELS . '/Role.php';


class RoleController extends Controller
{
    public function index()
    {
        $title = "Role List";
        $roles = (new Role())->all();
        $this->view->render('admin/roles/index', compact('title', 'roles'), 'admin');
    }

    public function create()
    {
        $title = "Create Role";
        $this->view->render('admin/roles/create', compact('title'), 'admin');
    }

    public function update()
    {

        (new Role())->update($this->request->data['id'], ['name' => $this->request->data['name']]);
        return header('Location: /admin/roles');
    }


    public function store()
    {
        (new Role())->store(["name" => $this->request->data['name']]);
        return header('Location: /admin/roles');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "Role Detail";
        $role = (new Role())->getByPK($id);
        $this->view->render('admin/roles/show', compact('title', 'role'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Role Edit";
        $role = (new Role())->getByPK($id);
        $this->view->render('admin/roles/edit', compact('title', 'role'), 'admin');
    }


    public function destroy($vars)
    {
        $title = "Role Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            (new Role())->destroy($id);
            return header('Location: /admin/roles');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/roles');
        }
        $role = (new Role())->getByPK($id);
        $this->view->render('admin/roles/delete', compact('title', 'role'), 'admin');
    }

}