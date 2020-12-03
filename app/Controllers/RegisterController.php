<?php

class RegisterController extends Auth
{
    private $options = [
        'cost' => 12
    ];

    public function register()
    {
        if ($this->isValidPassword($this->request->data['password'], $this->request->data['confirmpassword'])) {
            $hash = password_hash($this->request->data['password'], PASSWORD_BCRYPT, $this->options);
            list($name, $domain) = explode('@', $this->request->data['email']);
            $first_name = $this->request->data['first_name'] ?? $name;
            $last_name = $this->request->data['first_name'] ?? $name;
            $phone_number = $this->request->data['phone_number'] ?? '';
            (new User())->store(["name" => $name, 'email' => $this->request->data['email'], 'password' => $hash,
                'first_name' => $first_name, 'last_name' => $last_name, 'phone_number' => $phone_number]);
            return header('Location: /#login');
        } else {
            $this->error = 'Your password do not match. Please type correctly';
            return header('Location: /#register');
        }
    }

    private function isValidPassword($password, $confirmpassword)
    {
        if ($password != $confirmpassword) {
            return false;
        }
        return true;
    }
}