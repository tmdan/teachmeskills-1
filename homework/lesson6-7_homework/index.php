<?php
session_start();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Вход и авторизация на сайт</title>
    </head>
    <body>
    <form  method="post" enctype="multipart/form-data">
        <p>Пожалуйста зарегистрируйтесь!<p>
            <?php
            if (isset($_POST['firstname']) and empty($_POST['firstname'])):?>
            <br><p style="color: red"> Вы не ввели имя <p><br>
            <?php endif?>
            <input type="text" name="firstname" placeholder="Имя"><br>Введите имя<br>
            <?php
            if (isset($_POST['lastname']) and empty($_POST['lastname'])):?>
            <br><p style="color: red"> Вы не ввели фамилию <p><br>
            <?php endif?>
            <br><input type="text" name="lastname" placeholder="Фамилия"><br>Введите фамилию<br>
            <?php
            if (isset($_POST['email']) and empty($_POST['email'])):?>
            <br><p style="color: red"> Вы не ввели email <p><br>
            <?php endif?>
            <br><input type="email" name="email" placeholder="Email"><br>Введите email<br>
            <?php
            if (isset($_POST['login']) and empty($_POST['login'])):?>
            <br><p style="color: red"> Вы не ввели имя пользователя <p><br>
            <?php endif?>
            <br><input type="text" name="login" placeholder="Имя пользователя"><br>Введите имя пользователя<br>
            <?php
            if (isset($_POST['password']) and empty($_POST['password'])):?>
            <br><p style="color: red"> Вы не ввели пароль <p><br>
            <?php endif?>
            <br><input type="password" name="password" placeholder="Пароль"><br>Введите пароль<br>
        <p>Загрузите фото<p>
            <input type="file" name="filename">
        <p><input name="send" type="submit" value="Зарегестрироваться"></p>
    </form>
    </body>
    </html>

<?php
if ($_FILES)
{   $uploaddir = './';
    $uploadfile = $uploaddir . basename($_FILES['filename']['name']);
    move_uploaded_file($_FILES["filename"]["tmp_name"], $uploadfile);
    echo "Файл загружен";
}

if (array_key_exists('send', $_POST)){
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['file'] = $_FILES["filename"]["name"];
    $_SESSION['photo'] = $uploadfile;
    setcookie('login', $_POST['login'],time() + 3600 * 24 * 365, '/');
    setcookie('password', $_POST['password'],time() + 3600 * 24 * 365, '/');
    setcookie('firstname', $_POST['firstname'],time() + 3600 * 24 * 365, '/');
    setcookie('lastname', $_POST['lastname'],time() + 3600 * 24 * 365, '/');
    setcookie('email', $_POST['email'],time() + 3600 * 24 * 365, '/');
    setcookie('file', $_FILES["filename"]["name"],time() + 3600 * 24 * 365, '/');
    setcookie('photo', $_COOKIE['photo'] = $uploadfile,time() + 3600 * 24 * 365, '/');
    $_COOKIE['firstname'] = $_POST['firstname'];
    $_COOKIE['lastname'] = $_POST['lastname'];
    $_COOKIE['email'] = $_POST['email'];
    $_COOKIE['login'] = $_POST['login'];
    $_COOKIE['password'] = $_POST['password'];
    $_COOKIE['file'] = $_FILES["filename"]["name"];
    $_COOKIE['photo'] = $uploadfile;
    header("Location: login.php");
}
?>

