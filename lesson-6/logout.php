<?php
    session_start();
    unset($_SESSION["session_username"]);
    session_destroy();
    setcookie("user-auth", "VerySecretUniqueKey");
    header("location:ticket473_greeen.php");
?>
