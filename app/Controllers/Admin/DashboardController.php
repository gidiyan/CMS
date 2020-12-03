<?php

class DashboardController extends Auth implements AuthInterface
{
    public function index()
    {
        if ($this->isAdmin()) {
            $this->view->render('admin/index', ['title' => 'admin'], 'admin');
        } else {
            $this->redirector->redirect('/profile');
        }
    }

    public function isAdmin()
    {
        if (!$this->user) {
            return null;
        }
        if (!$this->user->role_id == 1) {
            return true;
        } else {
            return false;
        }
    }
}