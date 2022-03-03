<?php

namespace Antonascheulov\Framework;

use Antonascheulov\Framework\Components\Session;

class ABC
{

    public function __construct()
    {
        Session::set('key', '123');
        echo "hello";
    }

}