<?php
    session_start();
    unset($_SESSION["session_username"]);
    session_destroy();
    setcookie("session_username", $_POST["first_name"] . " " . $_POST["last_name"], time() - 3600);
    setcookie("email" , $_POST["email"], time() - 3600);
    setcookie("login" , $_POST["login"], time() - 3600);
    setcookie("password" , $_POST["password"], time() - 3600);
    header("location:index.php");
?>
