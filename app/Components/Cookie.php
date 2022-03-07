<?php

namespace App\Components;

class Cookie
{
    static public function get($name)
    {
       return $_COOKIE[$name];
    }

    public static function set($name, $value, $time)
    {
        setcookie($name, $value, time()+$time);
    }

    static public  function delete($name)
    {
        setcookie($name, '');
    }
}
