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
    <title>Личный кабинет</title>
</head>
<body>
<h1>Привет <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'].'!'?></h1>
<h2>Добро пожаловать в личный кабинет!</h2>
<h3>Здесь указаны твои данные:</h3>
<p>Имя - <?php echo $_SESSION['firstname']?><p>
<p>Фамилия - <?php echo $_SESSION['lastname']?><p>
<p>Email - <?php echo $_SESSION['email']?><p>
<p>Имя пользователя - <?php echo $_SESSION['login']?><p>
<p>Пароль - <?php echo $_SESSION['password']?><p>
<img src="<?php echo $_SESSION['photo']?>" alt="Аватарка" height="300px" width="300px">
<p>Если хочешь что-нибудь поменять можешь вернуться на начальную страницу<p>
<form method="post">
<p><input name="exit" type="submit" value="Изменить данные/Выход"> </p>
</form>
</body>
</html>

<?php
if (array_key_exists('exit',$_POST)){
    session_destroy();
    header("Location: index.php");
}
?>