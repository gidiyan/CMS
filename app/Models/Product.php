<?php

require_once COMMON . '/Model.php';

class Product extends Model
{
    protected static $table = 'products';
    protected static $pk = 'id';
}