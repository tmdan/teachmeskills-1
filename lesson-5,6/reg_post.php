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
    <p>Your own area area</p>
    <p><?php $name=$_POST['name'];
            echo "Your name is $name"?></p>
    <p><?php $surname=$_POST['surname'];
        echo "Your surname is $surname"?></p>

    <?php
    @mkdir("upload", 0777);

    if(copy($_FILES["photos"]["tmp_name"],"./upload/".$_FILES["photos"]["name"]))
    {
        print "<img src='upload/".$_FILES["photos"]["name"]."'/><br/>";
    }
    ?>

</body>
</html>
<?php
foreach($_POST as $value) {
    if (empty($value)) {
        header("Location: register.php");
    } else {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        setcookie("login", $login);
        setcookie("pass", $pass);
    }
}
