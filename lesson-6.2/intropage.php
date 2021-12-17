<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Личный кабинет</title>
</head>
<body>
<?php
session_start();
if (!isset($_COOKIE["session_username"])):
    header("location:index.php");
else:
?>
    <div>
        <h1>Добро пожаловать, <?php echo $_COOKIE["session_username"];?>!</h1>
        <p>Вы ввели следующую информацию:</p>
        <p>Имя пользователя - <?php echo $_COOKIE["session_username"]?></p>
        <p>Email - <?php echo $_COOKIE["email"]?></p>
        <p>Логин - <?php echo $_COOKIE["login"]?></p>
        <p>Пароль - <?php echo $_COOKIE["password"]?></p>
        <p>PHPSESSID - <?php echo $_COOKIE["PHPSESSID"];?></p>
        <img src='<?php echo "./" . $_COOKIE["file"] ?>' alt="uploaded image" class="wrapper-img">
        <form action="logout.php">
            <input  type="submit" value="Выйти">
        </form>
    </div>
<?php endif;
?>
</body>
</html>
