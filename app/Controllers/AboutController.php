<?php
require_once COMMON . '/Controller.php';
require_once MODELS . '/Guestbook.php';

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Contact US';
        $address = config('config');
        $this->view->render('/about/index', compact('title', 'address'));
        if (!empty($_POST)) {
            (new Guestbook())->store(['username' => $this->request->data['username'], 'email' => $this->request->data['email'],
                'subject' => $this->request->data['subject'], 'message' => $this->request->data['message'],'approved'=>0]);
        }
    }
}