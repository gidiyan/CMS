<?php

class Helper
{

    public static function asset($dir, $file)
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' . $dir . '/' . $file;
    }

}