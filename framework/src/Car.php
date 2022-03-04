<?php

namespace Ekaterinakhliabets\Framework;

use Ekaterinakhliabets\Framework\Components\Session;

class Car
{
    public function __construct()
    {
        Session::set('key', '123');
        echo 'hello';
    }
}