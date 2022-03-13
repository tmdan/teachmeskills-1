<?php

namespace App\Components;

class Cookie
{
    public static function set($name, $value, $time)
    {
        setcookie($name, $value, $time,'/');
    }

    public static function get($name)
    {
        return array_key_exists($name, $_COOKIE) ? $_COOKIE["$name"] : null;
    }

    public static function delete($name)
    {
        if (array_key_exists($name, $_COOKIE)) {
            setcookie($name, "", -1, '/');
            return true;
        } else
            return false;
    }
}