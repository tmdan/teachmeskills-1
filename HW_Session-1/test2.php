<?php
    session_start();
    if (!empty($_SESSION) && !empty($_SESSION['name']) && !empty($_SESSION['lastname']) && !empty($_SESSION['age'])) {
        echo 'Ваше имя '. $_SESSION['name'].' '.$_SESSION['lastname']. ' вам ' .$_SESSION['age']. ' года';
    } else {
        echo 'Введите все данные!';
        echo '<br><a href="./test1.php">Вернуться</a>';
    }

    echo '<br><a href="./logout.php">Logout</a>';