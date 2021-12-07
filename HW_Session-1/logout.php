<?php
    session_start();
    echo '<br>Сделайте страницу logout.php, при заходе на которую будет завершаться сессия пользователя.<br>';
    echo 'Сессия завершена';
    session_destroy();
