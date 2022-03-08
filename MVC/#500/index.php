<?php
require_once 'components/Cookie.php';//model

//controller-->
Cookie::set('name','Ilya',86400);
var_dump(Cookie::get('name'));
Cookie::delete('name',1);
