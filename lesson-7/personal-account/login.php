<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<?php
session_start();
?>
    <main>
        <div class="authorization-wrapper">
            <form method="post">
                <?php
                function checkFilling ($element, $fieldName){
                    if (array_key_exists('authorization',$_POST) && empty($_POST[$element]))
                    {
                        echo "<p class='warning-text'> Заполните поле " . $fieldName . "</p>" ;
                    }
                }
                checkFilling("login", "Логин");
                ?>
                <input class="form-element" type="text" name="login" value="<?php
                if (isset($_COOKIE['login'])){
                    echo $_COOKIE['login'];}?>" placeholder="Логин"><br>

                <?php
                checkFilling("password", "пароль");
                ?>

                <input class="form-element" type="password" name="password" value="<?php
                if (isset($_COOKIE['password'])){
                    echo $_COOKIE['password'];}?>" placeholder="Пароль"  ><br>

                <input class="button-login" name="authorization" type="submit" value="Войти">
                <a href="index.php"> Регистрация </a>
            </form>

        </div>
    </main>
</body>
</html>

<?php
if (array_key_exists('authorization',$_POST) && (!empty($_POST['login']) || !empty($_POST['password'])) ){

    if (($_POST['login']===$_COOKIE['login'] || $_POST['login']===$_COOKIE['email']) && $_POST['password']===$_COOKIE['password']){

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: personalArea.php");

    }
    else {
        echo "<p class='warning-text'>Вход в личный кабинет не выполнен! Вы не правильно ввели логин или пароль!!!</p>";
    }
}
?>


