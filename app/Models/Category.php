<?php

require_once COMMON . '/Connection.php';

class Category
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection(require_once DB_CONFIG_FILE);
    }

    public function all()
    {
        $stmt = $this->conn->pdo->query("SELECT * FROM categories ORDER BY id ASC");
        $categories = $stmt->fetchAll();
        return $categories;
    }

    public function store($name, $status)
    {
        $stmt = $this->conn->pdo->prepare("INSERT INTO categories (name,status) VALUES (?,?)");
        $stmt->execute([$name, $status]);
        return $this->conn->pdo->lastInsertId();
    }
}
