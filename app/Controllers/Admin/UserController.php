<?php

class UserController extends Controller
{
    private $options = [
        'cost' => 12
    ];

    public function index()
    {
        $title = "User List";
        $users = (new User())->all();
        $this->view->render('admin/users/index', compact('title', 'users'), 'admin');
    }

    public function create()
    {
        $title = "Create User";
        $roles = (new Role())->all();
        $this->view->render('admin/users/create', compact('title', 'roles'), 'admin');
    }

    public function update()
    {

        (new User())->update($this->request->data['id'], ['name' => $this->request->data['name']]);
        return header('Location: /admin/users');
    }


    public function store()
    {
        $hash = password_hash($this->request->data['password'], PASSWORD_BCRYPT, $this->options);
        (new User())->store(["name" => $this->request->data['name'], 'email' => $this->request->data['email'], 'role_id' => $this->request->data['role_id'], 'password' => $hash]);
        return header('Location: /admin/users');
    }

    public function show($vars)
    {
        extract($vars);
        $title = "User Detail";
        $user = (new User())->getByPK($id);
        $this->view->render('admin/users/show', compact('title', 'user'), 'admin');
    }

    public function edit($vars)
    {
        $roles = (new Role())->all();
        extract($vars);
        $title = "User Edit";
        $user = (new User())->getByPK($id);
        $this->view->render('admin/users/edit', compact('title', 'user', 'roles'), 'admin');
    }


    public function destroy($vars)
    {
        $title = "User Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            (new User())->destroy($id);
            return header('Location: /admin/users');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/users');
        }
        $user = (new User())->getByPK($id);
        $this->view->render('admin/users/delete', compact('title', 'user'), 'admin');
    }

}