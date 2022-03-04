<?php
namespace Panymari\Framework;
use Panymari\Framework\Components\Session;
class Car{
    public function __construct(){
        Session::set('key','123');
        echo "hello";
    }
}