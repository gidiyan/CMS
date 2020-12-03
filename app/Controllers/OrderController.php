<?php

class OrderController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $userId = Session::get('userId');
        if ($userId) {
            $this->user = (new User())->getByPK($userId);
        } else {
            $this->user = null;
        }
    }

//


    public function cart()
    {
        if (!$this->user) {
            $this->redirector->redirect('/#login');
        }
        $options = [];
        $content = trim(file_get_contents("php://input"));
        var_dump($content);
        echo 'Ups';
        $decoded = json_decode($content, true);
        $productsInCart = json_encode($decoded['cart']);
        (new Order())->store([
            "user_id" => $this->user->id,
            "products" => $productsInCart
        ]);
        echo json_encode($content);
    }
}