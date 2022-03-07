<?php

require "vendor\autoload.php";

use App\Components\Cookie;

Cookie::set('nameName', 'Kate', 3600);
echo Cookie::get('nameName');
Cookie::delete('nameName');
