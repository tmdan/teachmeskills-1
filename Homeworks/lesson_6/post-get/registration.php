<?php

session_start();

//Если кнопка submit была нажата
if(array_key_exists('submit', $_POST)){

    //Если firstname существует в массиве $_POST
    if(array_key_exists('firstname', $_POST))
        //Записываем занчение в куки
        setcookie("firstname", $_POST['firstname'], time() + 36000);

    //Если lastname существует в массиве $_POST
    if(array_key_exists('lastname', $_POST))
        //Записываем занчение в куки
        setcookie("lastname", $_POST['lastname'], time() + 36000);

    //Если email существует в массиве $_POST
    if(array_key_exists('email', $_POST))
        setcookie("email", $_POST['email'], time() + 36000);

    if(array_key_exists('password', $_POST)){
        //Записываем занчение в куки
        setcookie("password", md5(md5($_POST['password'])), time() + 36000);
        //Записываем значение в сессию
        $_SESSION['password'] = md5(md5($_POST['password']));
    }

    if(array_key_exists('login', $_POST)){
        $_SESSION['login'] = $_POST['login'];
        setcookie("login", $_POST['login'], time() + 36000);
    }


    header('Location: account.php');
}


;?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles\style.css">
    <title>Регистрация</title>
</head>
<body>
    <div id="container">
        <div id='registration'>
            <h2>Регистрация пользователя</h2>
            <form  method="post">
                <h4>Введите Вашу Фамилию</h4>
                <input type="text" name="firstname" required>
                <h4>Введите Ваше Имя</h4>
                <input type="text" name="lastname" required>
                <h4>Введите Ваш E-mail</h4>
                <input type="text" name="email" required>
                <h4>Создайте логин</h4>
                <input type="text" name="login" required><br>
                <h4>Создайте пароль</h4>
                <input type="password" name="password" required><br>
                <h4>Загрузите Ваше фото:</h4>
<!--                <input type="file" name="filename" size="10"><br /><br />-->
<!--                <input type="submit" value="Загрузить" /><br /><br />-->
                <input name="submit" type="submit" value="зарегестрироваться">
            </form>
                <a href="index.php">Вернуться на страницу Авторизации</a>!
        </div>
    </div>
</body>
</html>
