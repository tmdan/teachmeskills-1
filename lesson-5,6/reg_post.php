<?php
session_start();
foreach($_POST as $value) {
    if (empty($value)) {
        echo "entry values";
    }
}
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];

setcookie("login", $_SESSION['login']);
setcookie("pass", $_SESSION['pass']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>Your own area</p>
    <p><?="Your name is {$_SESSION['login']}"?></p>
    <p><?php $surname=$_SESSION['pass'];
        echo "Your password is $surname"?></p>

    <?php
    @mkdir("upload", 0777);

    if(copy($_FILES["photos"]["tmp_name"],"./upload/".$_FILES["photos"]["name"]))
    {
        print "<img src='upload/".$_FILES["photos"]["name"]."'/><br/>";
    }
    ?>

</body>
</html>
