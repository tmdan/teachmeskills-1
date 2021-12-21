<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="registration.php" id="link1">registration</a>
    </div>
    <div>
        <a href="sign_in.php" id="link2">sign in</a>
    </div>
</body>
</html>
<script defer>
    $link = document.getElementById("link");
    $link.addEventListener("mousedown",push);
    function push(){
        $link.style.borderWidth = "3px";
    }
    $link.addEventListener("mouseup",up);
    function up(){
        $link.style.borderWidth = "1px";
    }
</script>
<?php

