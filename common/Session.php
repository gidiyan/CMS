<?php

class Session
{
    private static $sessionStarted = false;

    public function init()
    {
        if (self::$sessionStarted == false) {
            session_start();
            self::$sessionStarted = true;
        }
        return session_id();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function unset($key)
    {
        if (self::$sessionStarted = true) {
            unset($_SESSION[$key]);
        }
    }

    public static function destroy()
    {
        if (self::$sessionStarted = true) {
            session_unset();
            session_destroy();
        }
    }


}