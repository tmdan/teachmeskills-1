<?php
if (array_key_exists('exit',$_POST)){
    session_destroy();
    header("Location: index.php");
}
?>;