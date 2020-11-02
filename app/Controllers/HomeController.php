<?php

class HomeController
{
    public function index()
    {
        render('/home/index',['title'=>'Homepage']);
    }
}