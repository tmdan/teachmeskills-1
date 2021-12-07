<?php
    session_start();
    if (!empty($_SESSION)) {
        echo 'Ваше имя '. $_SESSION['name'].' '.$_SESSION['lastname']. ' вам ' .$_SESSION['age']. ' года';
    }

    echo '<a href="./HW_Cycles/index.php">Cycles in PHP</a>';