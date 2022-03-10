<?php

namespace Dmitriisavchik\Framework;

use Dmitriisavchik\Framework\Components\Session;

class Car
{
    public function __construct()
    {
        Session::set('name', '123');
        echo 'hello';
    }
}