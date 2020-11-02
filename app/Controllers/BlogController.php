<?php

class BlogController
{
    public function index()
    {
        $title = 'blog';
        $address = config('config');
        $news = config('news');
        $messages = $this->messagesGet();
        render('/blog/index', compact('title','address','messages','news'));
    }
    public function messagesGet(){
        $config = require_once CONFIG.'/db.php';
        $conn = mysqli_connect($config['db']['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'],$config['db']['DB_NAME']);
        $messages = [];
        $sql = "SELECT *FROM guestbook";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0) {
            $messages = mysqli_fetch_all($res,1);
        }else {
            echo "No Messages Yet";
        }
        mysqli_close($conn);
        return $messages;
    }


}