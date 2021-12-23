<?php
session_start();

if (
    array_key_exists('login', $_SESSION) &&
    array_key_exists('login', $_COOKIE) &&
    $_SESSION['login'] == $_COOKIE['login'] &&
    array_key_exists('password', $_COOKIE) &&
    array_key_exists('password', $_SESSION) &&
    $_SESSION['password'] == $_COOKIE['password']
) {
    //
} else {
    header('Location: ./index.php');
}

if (!isset($_SESSION['login']) && !isset($_SESSION['password'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['e-mail'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    //$ava = $_FILES[]

    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    setcookie("firstname", $firstname, time() + 36000);
    setcookie("lastname", $lastname, time() + 36000);
    setcookie("login", $login, time() + 36000);
    setcookie("password", $password, time() + 36000);
    setcookie("email", $email, time() + 36000);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles\style.css">
    <title>Личный кабинет</title>
</head>
<body>
<div id="wrap">
    <h3>Вы ввели:</h3><br>
    <h4>Фамилия:</h4>

    <!----------------Для понимания!!!!!!!------------------------------------------------->
    <!---<?php echo $_COOKIE['firstname'] ?> тоже самое что и <?= $_COOKIE['firstname'] ?>--->
    <!---<?php echo $_COOKIE['firstname'] ?? "" ?> тоже самое что и тернарнй оператор  <? echo isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : "" ?>--->
    <!----------------Для понимания!!!!!!!------------------------------------------------->


    <p><?= $_COOKIE['firstname'] ?? "" ?></p>
    <h4>Имя:</h4>
    <p><?= ($_COOKIE['lastname'] ?? "") ?></p>
    <h4>E-mail:</h4>
    <p><?= $_COOKIE['email'] ?? "" ?></p>
    <h4>Логин:</h4>
    <p><?= $_COOKIE['login'] ?? "" ?></p>
    <h4>Пароль:</h4>
    <p><?= $_COOKIE['password'] ?? "" ?></p><br>
</div>
<a href="logout.php">ВЫХОД</a>
</body>
</html>
