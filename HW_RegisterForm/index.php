<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="date2.php" method="post">
    <label>Логин</label>
    <input type="text" name="login_i" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password_i" placeholder="Введите пароль">
    <input class="btn" type="submit" name="button" value="Войти">
    <p>У вас нет аккаунта? <a href="register.php">Зарегестрироваться</a></p>
    <?php
        if(isset($_SESSION['log'])) {
           echo $_SESSION['log'];
    } elseif (isset($_SESSION['pass3'])) {
            echo $_SESSION['pass3'];
        }
            unset($_SESSION['log']);
            unset($_SESSION['pass3']);
    ?>
</form>
</body>
</html>

<?php
