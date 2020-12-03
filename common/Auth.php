<?php

class Auth extends Controller
{
    public $user = null;
    protected $logged_in = false;
    protected $user_id = null;
    protected $error = null;
    protected $messages = null;

    public function __construct()
    {
        parent::__construct();
        Session::init();
        if ($userId = Session::get('userId')) {
            $this->user = (new User)->getByPK($userId);
            if ($this->user != NULL) {
                $this->logged_in = true;
                $this->user_id = $userId;
            }
        }
    }
}