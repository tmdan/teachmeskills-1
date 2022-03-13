<?php

namespace App\Components;

class Cookies
{
    public static function get($name)
    {
        echo $_COOKIE[$name];
    }

    public static function set($name, $value, $time = 3600)
    {
        setcookie($name, $value, time()+$time);
    }

    public static function delete($name)
    {
        if(isset($_COOKIE[$name]))
        {
         setcookie($name, '', time()-3600);
        }
    }
}