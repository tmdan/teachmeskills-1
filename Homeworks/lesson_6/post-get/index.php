<?php
session_start();

//array_key_exists - благодаря данной фукнции мы можем проверить существования ключа в массиве
if (
    //Если приходит логин в $_POST - т.е. если существует значение с ключем login в массиве $_POST
    array_key_exists('login', $_POST) &&
    //Если приходит логин в $_COOKIE - т.е. если существует значение с ключем login в массиве $_COOKIE
    array_key_exists('login', $_COOKIE) &&
    //И если тот ключ что пришел с формы анологичен значение которая уже есть в куках то значит пользователь ранее был зареган
    $_POST['login'] == $_COOKIE['login'] &&
    array_key_exists('password', $_COOKIE) &&
    array_key_exists('password', $_POST) &&
    md5(md5($_POST['password'])) == $_COOKIE['password']
){
    //Заносим данные с сессию
    $_SESSION['password'] = md5(md5($_POST['password']));
    $_SESSION['login'] = $_POST['login'];

    //Делаем редирект в кабинет
    header('Location: account.php');
}




//array_key_exists - благодаря данной фукнции мы можем проверить существования ключа в массиве
//if (array_key_exists('login', $_SESSION) && array_key_exists('password', $_SESSION)) {
//   // header('Location: account.php');
//}

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles\style.css">
    <title>Авторизация</title>
</head>
<body>

<div id="container">
    <!--        <h1>Добро пожаловать!</h1>-->
    <div id='authorization'>
        <h2>Авторизация пользователя</h2>


        <form method="POST">
            <h3>Введите логин</h3>
            <input type="text" name="login" id="login" required><br>
            <h3>Введите пароль</h3>
            <input type="password" name="password" id="password" required><br>
            <input type="submit" value="отправить">
        </form>


        <p>
            Впервые у нас? - <a href="registration.php">зарегистрируйтесь</a>!
        </p>
    </div>


</div>
</body>
</html>
