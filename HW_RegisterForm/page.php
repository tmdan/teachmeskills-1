<?php
    session_start();
    if(!isset($_SESSION['connect'])) {
        header('location: index.php');
    }
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
    <h1>Добро пожаловать, <?=$_SESSION['login']?>!</h1>
    <img src="uploads/<?=$_SESSION['img'];?>">
    <p>Твой логин: <?=$_SESSION['login']?></p>
    <p>Твой пароль: <?=$_SESSION['password']?></p>
    <p>Твой E-mail: <?=$_SESSION['email']?></p>
    <form action="logout.php">
        <button>Выйти</button>
    </form>
</body>
</html>
