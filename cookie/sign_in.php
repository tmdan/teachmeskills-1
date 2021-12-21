<?php
    if(is_null($_COOKIE)){
            if($_COOKIE["login"]==$_POST["login"] and $_COOKIE["password"]==$_POST["password"]){
                 header("Location: persanalPage.php");
            }
    }else echo "you have to registration!";
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
<form method="post" enctype="multipart/form-data">
    <label><span>login</span>
        <div> <input type="text" name="login" placeholder="write in"></div>
    </label>
    <label><span>password</span>
        <div><input type="password" name="password" placeholder="write in"></div>
    </label>
    <input type="submit" value="push to server" id="click">
    <a href="registration.php">registration</a>
</form>
</body>
</html>


