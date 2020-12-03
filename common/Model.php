<?php

class Model
{
    protected $conn;
    protected static $table = '';
    protected static $pk = '';
    protected static $filter = '';


    public function __construct()
    {
        $this->conn = Connection::connect();
    }

    public function all()
    {
        $stmt = $this->conn->query("SELECT * FROM " . static::$table);
        return $stmt->fetchAll();

    }

    public function filter()
    {
        $stmt = $this->conn->query("SELECT * FROM " . static::$table . " WHERE " . static::$filter . '= 1');
        return $stmt->fetchAll();
    }

    public function store($params)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s);', static::$table, implode(', ', array_keys($params)), ':' . implode(", :", array_keys($params))
        );
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
    }

    public function getByPK($param)
    {
        $stmt = $this->conn->prepare("SELECT * FROM " . static::$table . " WHERE " . static::$pk . "=" . $param);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function destroy($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM " . static::$table . " WHERE " . static::$pk . " = ? LIMIT 1");
        $stmt->execute([$id]);
    }

    public function update($id, $params)
    {
        $keys = [];
        foreach ($params as $key => $value) {
            array_push($keys, $key . "='" . $value . "'");
        }
        $sql = sprintf(
            'UPDATE  %s SET %s WHERE %s = %s', static::$table, implode(', ', $keys), static::$pk, $id);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function getWithSql($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getBySql($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getItemsById($sql, $id)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getItemById($sql, $id)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
