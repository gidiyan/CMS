<?php

class BlogController extends Controller
{
    protected $conn;

    public function index()
    {
        $title = 'blog';
        $address = config('config');
        $news = config('news');
        $messages = (new Guestbook())->filter();
        $this->view->render('/blog/index', compact('title', 'address', 'messages', 'news'));
    }

}