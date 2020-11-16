<?php

require_once COMMON . '/Model.php';

class User extends Model
{
    protected static $table = 'users';
    protected static $pk = 'id';
}
