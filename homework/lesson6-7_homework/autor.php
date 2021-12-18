<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: login.php");
}
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
    <p> Спасибо что посетили наш сайт! Пожалуйста зарегистрируйтесь или войдите!<p>
        <br><input type="text" name="login" placeholder="Имя пользователя"><br>Введите имя пользователя<br>
        <br><input type="password" name="password" placeholder="Пароль"><br>Введите пароль<br>
    <p><input name="go" type="submit" value="Войти"></p>
    <a href="./index.php">Я новый пользователь у меня нет аккаунта</a>
</form>
</body>
</html>
<?php
if (array_key_exists('go', $_POST) and $_POST['login'] == $_COOKIE['login'] and $_POST['password'] == $_COOKIE['password']) {
    $_SESSION['password'] = $_POST['password'];
    header("Location: login.php");
} else {
    echo '<p style="color: red">' . "Вы ввели неправилое имя пользователя или пароль!" . '<p>';
}

echo '<pre>' . var_export($_COOKIE, true) . '</pre>';
echo '<pre>' . var_export($_POST, true) . '</pre>';
echo '<pre>' . var_export($_SESSION, true) . '</pre>';
?>;

