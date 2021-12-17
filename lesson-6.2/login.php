<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Вход в личный кабинет</title>
</head>
<body>
    <div class="wrapper-log">
        <form method="post">
            <p style="font-size:24px"><b>Вход</b></p>
            <input type="text" name="login" placeholder="Укажите логин"><br>
            <input type="password" name="password" placeholder="Укажите пароль"><br><br>
            <input type="submit" value="Войти">
        </form>
    </div>
    <div class="wrapper-log">
        <form method="post" action="index.php">
            <input type="submit" value="Назад к регистрации">
        </form>
    </div>
</body>
</html>
<?php
    if(!empty($_POST["login"]) && !empty($_POST["password"])) {
        if (($_POST["login"] == $_COOKIE["login"]) && ($_POST["password"] == $_COOKIE["password"])) {
            header("Location: intropage.php");
        } else {
            header("Location: logout.php");
        }
    }
?>