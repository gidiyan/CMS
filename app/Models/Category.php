<?php

require_once COMMON . '/Model.php';

class Category extends Model
{
    protected static $table = 'categories';
    protected static $pk = 'id';

    public static function getResource()
    {
        return self::$table;
    }
}
