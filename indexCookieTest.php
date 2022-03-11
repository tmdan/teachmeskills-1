<?php
require "vendor\autoload.php";

use App\Components\Cookie;

Cookie::set('test', 'Anton', 1200);
echo '<pre>' . var_export(Cookie::get('test'), true) . '</pre>';
Cookie::delete('test');
