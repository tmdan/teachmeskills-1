<?php
session_start();
?>
    <form action="index.php" method="post">
        Имя:  <input type="text" name="username" /><br />
        Password: <input type="password" name="password" /><br />
        <input type="submit" name="submit" value="Отправь меня!" />
        <input type="submit" name="exit" value="Выйти!" />
    </form>
<?php
//Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите
//сколько секунд назад пользователь зашел на сайт.
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
    $_SESSION['time'] = time();
} else { $_SESSION['counter']++;
}
echo 'Перезагруска страницы '.$_SESSION['counter'];
$time_connect = time() - $_SESSION['time'];
echo '<br> Сессия начата ' .$time_connect . ' секунд назад';
echo '<br>';
