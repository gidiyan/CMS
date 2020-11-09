<?php

class Connection extends PDO
{
    protected static $instance;
    protected static $config;

    public function __construct($dsn, $dbname, $dbpass, $options)
    {
        parent::__construct($dsn, $dbname, $dbpass, $options);
//        $this->createtable();
    }

    public static function connect()
    {
        self::$config = require DB_CONFIG_FILE;
        if (!self::$instance) {
            $dsn = self::makeDsn(self::$config['db']);
            self::$instance = new Connection($dsn, self::$config['user'], self::$config['password'], self::$config['options']);
        }
        return self::$instance;

    }

    private static function makeDsn($config)
    {
        $dsn = $config['driver'] . ':';
        unset($config['driver']);
        foreach ($config as $key => $value) {
            $dsn .= $key . '=' . $value . ';';
        }
        return substr($dsn, 0, -1);
    }
//private function createTable(){
// $sql = <<<EOT
// DROP TABLE IF EXISTS `products`;
//CREATE TABLE `products` (
// `id` int(11) NOT NULL AUTO_INCREMENT,
// `name` varchar(255) NOT NULL,
// `status` tinyint(1) NOT NULL,
// `category_id` int(11) unsigned DEFAULT NULL,
// `price` float unsigned NOT NULL,
// `brand_id` int(11) unsigned DEFAULT NULL,
// `description` text NOT NULL,
// `is_new` tinyint(1) NOT NULL DEFAULT '1',
// `is_recommended` tinyint(1) NOT NULL DEFAULT '0',
// PRIMARY KEY (`id`)
//) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
//
//EOT;
// $this->exec($sql);
//}

}