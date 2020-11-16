<?php

require_once COMMON . '/Model.php';

class Role extends Model
{
    protected static $table = 'roles';
    protected static $pk = 'id';
}
