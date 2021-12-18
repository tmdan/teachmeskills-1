<?php
if (array_key_exists('go', $_POST) and $_POST['login'] == $_COOKIE['login'] and $_POST['password'] == $_COOKIE['password']) {
    $_SESSION['password'] = $_POST['password'];
    header("Location: login.php");
} else {
    echo '<p style="color: red">' . "Вы ввели неправилое имя пользователя или пароль!" . '<p>';
}
?>;