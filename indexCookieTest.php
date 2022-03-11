<?php
require "vendor\autoload.php";

use App\Components\Cookie;

Cookie::set('test','Anton', '3600');
echo '<pre>' . var_export($_COOKIE, true) . '</pre>';
