<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper-reg">
            <form method="post" enctype="multipart/form-data">
            <p style="font-size:24px"><b>Регистрация</b></p>
                <?php
                if (isset($_POST["first_name"]) && empty($_POST["first_name"])):?>
                <p class="err">Пожалуйста, заполните Имя<p>
                <?php endif?>
            <input type="input" name="first_name" placeholder="Укажите Имя"><br>
                <?php
                    if (isset($_POST["last_name"]) && empty($_POST["last_name"])):?>
                    <p class="err">Пожалуйста, заполните Фамилию<p>
                    <?php endif?>
            <input type="text" name="last_name" placeholder="Укажите Фамилию"><br>
                <?php
                if (isset($_POST["email"]) && empty($_POST["email"])):?>
                <p class="err">Пожалуйста, заполните E-mail<p>
                <?php endif?>
            <input type="text" name="email" placeholder="Укажите e-mail"><br>
                <?php
                if (isset($_POST["login"]) && empty($_POST["login"])):?>
            <p class="err">Пожалуйста, заполните Login<p>
                <?php endif?>
            <input type="text" name="login" placeholder="Укажите логин"><br>
                <?php
                if (isset($_POST["password"]) && empty($_POST["password"])):?>
                <p class="err">Пожалуйста, заполните пароль<p>
                <?php endif?>
            <input type="password" name="password" placeholder="Укажите пароль"><br><br>
            Выберите фото:<br> <input type="file" name="filename" size="10"><br>
            <input type="submit" value="Зарегистрироваться">
            </form>
        </div>
        <div class="wrapper-log">
            <form action="login.php">
                <p style="font-size:24px"><b>Вход</b></p>
                <input type="submit" value="Страница входа">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    session_start();
    if(!empty($_POST["first_name"]) && !empty($_POST["password"])) {
            $_SESSION["session_username"] = $_POST["first_name"] . " " . $_POST["last_name"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["password"] = $_POST["password"];
            setcookie("session_username", $_POST["first_name"] . " " . $_POST["last_name"]);
            setcookie("email" , $_POST["email"]);
            setcookie("login" , $_POST["login"]);
            setcookie("password" , $_POST["password"]);
            header("Location: intropage.php");
    }
    if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK) {
        $name = $_FILES["filename"]["name"];
        $_SESSION["file"] = $_FILES["filename"]["name"];
        setcookie("file", $_SESSION["file"]);
        move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
        echo "Файл загружен";
    }
    if (!empty($_SESSION["login"]) && !empty($_SESSION["password"])) {
        header("Location: intropage.php");
    }

?>
