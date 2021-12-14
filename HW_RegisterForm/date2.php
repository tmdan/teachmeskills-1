<?php
    session_start();
    if($_SESSION['login'] == $_POST['login_i'] && $_SESSION['password'] == $_POST['password_i']
        && $_SESSION['login'] != '' && $_POST['password_i'] != '') {
        $_SESSION['connect'] = true;
        header('location: page.php');
    } else {
        $_SESSION['pass3'] = '<p class="msg">Неверный логин или пароль</p>';
        header('location: index.php');
    }