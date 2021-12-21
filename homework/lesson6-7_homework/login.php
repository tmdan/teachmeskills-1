<?php
session_start();
if ($_SESSION['password'] !== $_COOKIE['password']) {
    header("Location: index.php");
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Личный кабинет</title>
    </head>
    <body>
    <h1>Привет <?php echo $_COOKIE['firstname']." ".$_COOKIE['lastname'].'!'?></h1>
    <h2>Добро пожаловать в личный кабинет!</h2>
    <h3>Здесь указаны твои данные:</h3>
    <p>Имя - <?php echo $_COOKIE['firstname']?><p>
    <p>Фамилия - <?php echo $_COOKIE['lastname']?><p>
    <p>Email - <?php echo $_COOKIE['email']?><p>
    <p>Имя пользователя - <?php echo $_COOKIE['login']?><p>
    <p>Пароль - <?php echo $_COOKIE['password']?><p>
        <img src="<?php echo $_COOKIE['photo']?>" alt="Аватарка" height="300px" width="300px">
    <p>PHPSESSID - <?php echo $_COOKIE["PHPSESSID"];?></p>
    <p>Если хочешь что-нибудь поменять можешь вернуться на начальную страницу<p>
    <form method="post" enctype="multipart/form-data">
        <p><input name="exit" type="submit" value="Изменить данные/Выход"> </p>
    </form>
    </body>
    </html>
<?php
if (array_key_exists('exit', $_POST)) {
    session_destroy();
    header("Location: index.php");
}
?>
