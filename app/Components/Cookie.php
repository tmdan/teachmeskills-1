<?php
namespace App\Components;

class Cookie
{
    static function get($name)
    {
        setcookie($name);
    }

    static function set($name, $value, $time)
    {
        setcookie($name, $value, $time);
    }

    static function delete($name)
    {
        setcookie($name,time() - 3600);
    }
}