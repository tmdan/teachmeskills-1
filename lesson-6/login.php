<?php
    session_start();
    if (($_POST["login"] == "Romchik") && ($_POST["password"] == "3316")) {
//        $_SESSION["session_username"] = $_COOKIE["session_username"];
        $_SESSION["session_username"] = "Roman Piletski";
        $_SESSION["email"] = "1@tut.by";
        $_SESSION["login"] = "Romchik";
        $_SESSION["password"] = "3316";
        setcookie("user-auth", "VerySecretUniqueKey");
        header("Location: intropage.php");
    } else {
        header("Location: logout.php");
    }