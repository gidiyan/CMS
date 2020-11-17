<?php
require_once COMMON . '/Auth.php';
require_once MODELS . '/User.php';

class LoginController extends Auth
{
    private function checkUser($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $user = (new User())->getBySql($sql);
        if (!$user) {
            return false;
        } else {
            if (password_verify($password, $user->password)) {
                return $user->id;
            } else {
                return false;
            }
        }
    }

    public function login()
    {
        if ($this->logged_in == true) {
            return header('Location: /profile');
        }
        $userId = $this->checkUser($this->request->data['email'], $this->request->data['password']);
        if ($userId == false) {
            $this->error = 'Not valid User. Please try again';
            Session::set('error', $this->error);
            return header('Location: /#login');
        } else {
            $this->user = (new User())->getByPK($userId);
            $this->logged_in = true;
            $this->message = 'You Are Logged';
            Session::set('message', $this->message);
            Session::set('user_id', $this->user->id);
            setcookie('logged', $this->logged_in);
            return header('Location: /profile');
        }
    }

    public function logout()
    {
        Session::destroy('user_id');
        $this->logged_in = false;
        setcookie('logged', $this->logged_in, time() - 3600);
        return header('Location: /');
    }
}