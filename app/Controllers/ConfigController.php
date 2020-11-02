<?php

class ConfigController
{
    public function index()
    {
        $title = 'Edit Config';
        $address = config('config');
        $this->getNewAddress();
        render('/config/index', compact('title', 'address'));
    }

    public function getNewAddress()
    {

        $url = CONFIG . "/config.json";
        if ($_POST) {
//блок на валидацию email , если в контакты добавлю
//        try {
//            $email = $_POST['email'];
//            if (filter_var($email, FILTER_VALIDATE_EMAIL === false)) {
//                throw new Exception($email);
//            }
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
            $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
            $cords = filter_input(INPUT_POST, 'cords', FILTER_SANITIZE_SPECIAL_CHARS);
            $post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS);
//            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $formdata = ['post' => $post, 'cords' => $cords, 'city' => $city, 'country' => $country];
            $json = json_encode($formdata);
            try {
                file_put_contents($url, $json);
                header('Location: /contact');
                exit();
            } catch
            (Exception $e) {
                echo $e->getMessage();
                throw new Exception($e);
            }
        }

    }
}