<?php
foreach($_COOKIE as $name => $value){
    unset($_COOKIE[$name]);
    setcookie($name, null, -1, '/');
}
header("Location: index.php");