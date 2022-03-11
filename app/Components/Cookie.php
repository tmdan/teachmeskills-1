<?php

namespace App\Components;

class Cookie
{
    public static function set($name, $value, $time)
    {
        setcookie($name,$value,$time);
    }

    public static function get($name)
    {
        return $_COOKIE[$name];
    }

    public static function delete($name)
    {
        unset($_COOKIE[$name]);
        setcookie($name, null, -1, '/');
    }
}