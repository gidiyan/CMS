<?php
class AboutController
{
public function index(){
    $title = 'Contact US';
    $address =  config('config');
    render('/about/index',compact('title','address'));
    $this->messagesSend();
}
public function messagesSend(){
    $config = require_once CONFIG.'/db.php';
    $conn = mysqli_connect($config['db']['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'],$config['db']['DB_NAME']);
    $error = null;

    if(!empty($_POST)){
        try {
            $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $subject = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_SPECIAL_CHARS);
            $message = mysqli_real_escape_string($conn,$_POST['message']);
            $sql = "INSERT INTO guestbook (username,email,subject,message) VALUES ('$username','$email','$subject','$message');";
            mysqli_query($conn,$sql);
        } catch (Exception $e){
            $error =$e ->getMessage();
        }

    }
    mysqli_close($conn);
}
}

