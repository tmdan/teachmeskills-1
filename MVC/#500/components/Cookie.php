<?php
  class Cookie{
    static function get($name):string{
      return $_COOKIE["$name"];
    }
    static function set($name,$value,$time){
      setcookie("$name",$value,$time);
    }
    static function delete($name,$time){
      if(isset($_COOKIE["$name"])){
        setcookie("$name",null,time() - $time);
      }
    }
  }
