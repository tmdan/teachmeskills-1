<?php
    session_start();
    session_destroy();
    header('refresh:1; url=http://n336298b.beget.tech/emelyanov/HW_RegisterForm/index.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal page</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <h1 class="logout">Сессия завершена!</h1>
</body>
