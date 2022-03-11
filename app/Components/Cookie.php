<?php
class Cookie{
    public static function get($name){
        return $_COOKIE["$name"];
    }
    public static function set($name, $value, $time){
        setcookie($name, $value, $time);
    }
    public static function delete($name){
        if (isset($_COOKIE["$name"])) {
            setcookie($name, "", time() - 3600, "/");
        }
    }
}