<?php
    session_start();
    echo 'Модифицируйте этот код так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала.<br>';
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } elseif($_SESSION['counter'] >= 10) {
        unset($_SESSION['counter']);
    } else { $_SESSION['counter']++;
    }

    echo 'Релоад страницы '.$_SESSION['counter'];
