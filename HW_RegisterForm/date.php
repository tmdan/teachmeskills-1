<?php
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password_confirm'] = $_POST['password_confirm'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['img'] = $_FILES['avatar']['name'];



    if($_SESSION['password'] === $_SESSION['password_confirm'] && $_SESSION['password'] != '') {
        $path = 'uploads/' . $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
        $_SESSION['log'] = '<p class="msg2">Вы успешно зарегестрировались!</p>';
        header('location: index.php');
    }
    elseif($_SESSION['login'] == ''){
        $_SESSION['msg_login'] = '<p class="msg">Имя не установлено</p>';
        header('location: register.php');
}   elseif ($_SESSION['password'] != $_SESSION['password_confirm']) {
        $_SESSION['msg_pass'] = '<p class="msg">Разные пароли</p>';
        header('location: register.php');

}  elseif ($_SESSION['password'] == '' || $_SESSION['password_confirm'] == '') {
        $_SESSION['msg_pass2'] = '<p class="msg">Введите пароли!</p>';
        header('location: register.php');
    }
    else {
        header('location: register.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterForm</title>
    <link rel="stylesheet" href="style.css">
</head>