<?php

class ProfileController extends Auth implements AuthInterface
{
    public function index()
    {
        if (!$this->user) {
            header('Location: /#login');
        }
        $title = 'Personal Dashboard';
        $user = $this->user;
        $this->view->render('profile/index', compact('title', 'user'));
    }

    public function isAdmin()
    {
        return $this->user->role_id;
    }


    public function orderList()
    {
        if (!$this->user) {
            header('Location: /#login');
        }
        $sql = "SELECT * FROM orders WHERE user_id = ? ORDER BY id DESC";
        $orders = (new Order())->getItemsById($sql, $this->user->id);
        $title = "Personal Dashboard";
        $subtitle = "Your Orders";
        $user = $this->user;
        $this->view->render('profile/orders', compact('title', 'user', 'orders', 'subtitle'));
    }

    public function orderView($vars)
    {
        if (!$this->user) {
            header('Location: /#login');
        }
        extract($vars);

        list($orders, $order) = $this->getOrder($id);
        $products = [];

        $sql = "SELECT * FROM products WHERE id = ?";

        foreach ($orders as $ord) {
            $item = (new Product)->getItemById($sql, $ord['id']);
            array_push($products, [
                "id" => $ord['id'],
                "amount" => $ord['amount'],
                'name' => $item->name,
                'price' => $item->price,
                'image' => $item->image
            ]);
        }

        $title = 'You order #' . $id;
        $user = $this->user;
        $this->view->render('profile/order', compact('user', 'order', 'title', 'products'));
    }

    private function getOrder($id)
    {
        if (!$this->user) {
            header('Location: /#login');
        }
        $order = (new Order)->getByPK($id);
        return [json_decode($order->products, true), $order];
    }

    public function checkOrder($vars)
    {
        if (!$this->user) {
            header('Location: /#login');
        }

        extract($vars);
        list($orders, $order) = $this->getOrder($id);
        $products = [];
        $total = 0;
        $sql = "SELECT * FROM products WHERE id = ?";
        foreach ($orders as $ord) {
            $item = (new Product)->getItemById($sql, $ord['id']);
            $total += $ord['amount'] * $item->price;
        }
        $title = 'Product Order Form';
        $user = $this->user;
        $this->view->render('profile/checkout', compact('title', 'user', 'total', 'order'), 'check');
    }

}