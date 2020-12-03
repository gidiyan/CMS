<?php

class ShopController extends Controller
{
    public function index()
    {
        $this->view->render('/shop/index');
    }
}

