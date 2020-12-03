<?php

class Helper
{

    public static function asset($dir, $file)
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' . $dir . '/' . $file;
    }

    public static function isGuest()
    {
        if (isset($_COOKIE['Logged'])) {
            return false;
        }
        return true;
    }

    public static function getOrderStatus($status)
    {
        switch ($status) {
            case '1' :
                return 'New';
                break;
            case '2' :
                return 'Processing';
                break;
            case '3' :
                return 'Approaching';
                break;
            case '4' :
                return 'Closed';
                break;
        }
    }
}