<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 6</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
    session_start();
?>
<main>
    <h1 class="header">Активация пользователя</h1>
    <div class="authorization-wrapper">
        <form  method="POST" enctype="multipart/form-data">
            <p class="authorization-subtitle">Введите ваши данные</p>

            <?php
            function checkFilling ($element, $fieldName){
                if (array_key_exists('send',$_POST) && empty($_POST[$element]))
                {
                    echo "<p class='warning-text'> Заполните поле " . $fieldName . "</p>" ;
                }
            }
            checkFilling("login", "Логин");
            ?>

            <input class="form-element" type="text" name="login" value="<?php echo $_POST['login'];?>" placeholder="Логин"><br>

            <?php
            checkFilling("password", "пароль");
            ?>

            <input class="form-element" type="password" name="password" placeholder="Пароль" value="<?php echo $_SESSION['password'];?>" ><br>

            <?php
            checkFilling("first_name", "Имя");
            ?>

            <input class="form-element" type="text" name="first_name" value = "<?php echo $_POST['first_name'];?>" placeholder="Имя"> <br>

            <?php
            checkFilling("last_name", "Фамилия");
            ?>

            <input class="form-element" type="text" name="last_name" value = "<?php echo $_POST['last_name'];?>" placeholder="Фамилия"><br>

            <?php
            checkFilling("email", "email");
            ?>

            <input class="form-element" type="email" name="email" value = "<?php echo $_POST['email'];?>" placeholder="email"><br>

            <?php
            if (array_key_exists('send',$_POST) && empty($_FILES['userfile']['tmp_name'])){
                echo "<p class='warning-text'> Выберите файл! " . "</p>" ;
            }
            ?>
            <br> <input name="userfile" type="file" /> <br>

            <p><input class="button-login" name="send" type="submit" value="Войти"></p>

        </form>
    </div>
</main>
</body>
</html>

<?php
if (array_key_exists('send',$_POST)){

    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['file'] = $_FILES['userfile']['tmp_name'];

    if  ( !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['first_name'])
        && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_FILES['userfile']['tmp_name']) ) {

        $uploaddir = "foto/";
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        $_SESSION['uploadfile'] = $uploadfile;
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

        if ($_SESSION['login']!=='EkaterinaKhliabets' || $_SESSION['password']!=='123'){
            echo "<p class='warning-text'>Вход в личный кабинет не выполнен! Вы не правильно ввели логин или пароль!!!</p>";
        }
        else {
            header("Location: personalArea.php");
        }
    }
}
?>