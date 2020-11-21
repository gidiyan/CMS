<?php
//CRUD API resource controller
require_once COMMON . '/Controller.php';
require_once COMMON . '/Request.php';
require_once MODELS . '/Guestbook.php';


class GuestbookController extends Controller
{
    public function index()
    {
        $title = "Messages List";
        $messages = (new Guestbook())->all();
        $this->view->render('admin/guestbook/index', compact('title', 'messages'), 'admin');
    }


    public function show($vars)
    {
        extract($vars);
        $title = "Message Detail";
        $message = (new Guestbook())->getByPK($id);
        $this->view->render('admin/guestbook/show', compact('title', 'message'), 'admin');
    }

    public function edit($vars)
    {
        extract($vars);
        $title = "Message Edit";
        $message = (new Guestbook())->getByPK($id);
        $this->view->render('admin/guestbook/edit', compact('title', 'message'), 'admin');
    }

    public function update()
    {
        $approved = $this->request->data['approved'] ? 1 : 0;
        (new Guestbook())->update($this->request->data['id'], ['username' => $this->request->data['username'], 'email' => $this->request->data['email'],
            'subject' => $this->request->data['subject'], 'message' => $this->request->data['message'], 'approved' => $approved]);
        return header('Location: /admin/guestbook');
    }

    public function destroy($vars)
    {
        $title = "Message Delete";
        extract($vars);
        if (isset($_POST['submit'])) {
            (new Guestbook())->destroy($id);
            return header('Location: /admin/guestbook');
        } elseif (isset($_POST['reset'])) {
            var_dump($_POST);
            return header('Location: /admin/guestbook');
        }
        $message = (new Guestbook())->getByPK($id);
        $this->view->render('admin/guestbook/delete', compact('title', 'message'), 'admin');
    }

}