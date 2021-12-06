<?php
    session_start();
    unset($_SESSION["session_username"]);
    session_destroy();
    header("location:http://n336298b.beget.tech/piletski/lesson-6/index.php");
?>
