<?php
require_once COMMON.'/Controller.php';

class DashboardController extends Controller
{
    public function index()
    {
        $this->view->render('admin/index',['title'=>'admin'],'admin');
    }
}