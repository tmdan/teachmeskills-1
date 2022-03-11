<?php

require "vendor\autoload.php";

use App\Components\Cookie;

Cookie::set('name', 'Maria', 3600);
echo Cookie::get('name');
Cookie::delete('name');