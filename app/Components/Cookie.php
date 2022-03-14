<?php

namespace App\Components;

class Cookie
{
    static function set($name, $value, $time)
    {
        setcookie($name, $value, $time);
    }

    static function get($name): string
    {
        return $_COOKIE["$name"];
    }

    static function delete($name)
    {
        if (isset($_COOKIE["$name"])) {
            setcookie($name, null, time() - 3600);
        }
    }
}