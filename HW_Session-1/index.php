<?php
session_start();
echo '<br>Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите
сколько секунд назад пользователь зашел на сайт.<br><br>';
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
    $_SESSION['time'] = time();
} else { $_SESSION['counter']++;
}
echo 'Перезагруска страницы '.$_SESSION['counter'];
$time_connect = time() - $_SESSION['time'];
echo '<br> Сессия начата ' .$time_connect . ' секунд назад';
echo '<br>';

