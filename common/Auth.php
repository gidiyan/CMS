<?php
require_once COMMON . '/Controller.php';
require_once COMMON . '/Session.php';

class Auth extends Controller
{
    protected $logged_in = false;
    protected $user_id = null;
    protected $error = null;
    protected $messages = null;
    public $user = null;

    public function __construct()
    {
        parent::__constract();
        Session::init();
        if ($user_id == Session::get('user_id')) {
            $this->user = (new User())->getByPK($user_id);
            if ($this->user!=null) {
                $this->logged_in = true;
                $this->user_id = $user_id;
            }
        }
    }
}