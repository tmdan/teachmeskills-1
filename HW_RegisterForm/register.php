<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="date.php" method="post" enctype="multipart/form-data" ">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Повторите пароль</label>
    <input type="password" name="password_confirm" placeholder="Введите пароль еще раз">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Введите почтый адресс">
    <label>Добавить фото</label>
    <input type="file" name="avatar">
    <input class="btn" type="submit" name="button" value="Зарегестрироваться">
    <p>У вас есть аккаунт? <a href="index.php">Войти</a></p>
    <?php
        if(isset($_SESSION['msg_login'])) {
            echo $_SESSION['msg_login'];
        } elseif(isset($_SESSION['msg_pass'])) {
            echo $_SESSION['msg_pass'];
        } elseif(isset($_SESSION['msg_pass2'])) {
            echo $_SESSION['msg_pass2'];
        }
        unset($_SESSION['msg_pass2']);
        unset($_SESSION['msg_login']);
        unset($_SESSION['msg_pass']);
    ?>
</form>
</body>
</html>
<?php

