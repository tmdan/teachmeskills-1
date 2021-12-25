<?php
    $name = $_COOKIE["name"];
    $lastname = $_COOKIE["lastname"];
    $email = $_COOKIE["email"];
    $login = $_COOKIE["login"];
    if($_COOKIE){
        var_dump($_POST);
        if($_POST["exit"]) {
            session_destroy();
            header("Location:mainPage.php");
        }else echo "";
    }
    if(is_null($_COOKIE["name"])) header("Location: registration.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/personalPage.css">
    <title>Document</title>
</head>
<body>
    <div class="personal">
        <img src="./img/photo.jpg" alt="user photo">
        <div class="personal_info">
            <div>
                <p>name:<?php echo "<span>$name</span>" ?></>
            </div>
            <div>
                <p>lastname:<?php echo "<span>$lastname</span>" ?></p>
            </div>
            <div>
                <p>email:<?php echo "<span>$email</span>" ?></p>
            </div>
            <div>
                <p>login:<?php echo "<span>$login</span>" ?></p>
            </div>
            <div>
                <p>Cookie:<?php echo($_COOKIE["PHPSESSID"]) ?></p>
            </div>
            <form method="post">
                <input type="submit" id="exit" value="exit" name="exit">
            </form>
        </div>
    </div>
</body>
</html>
    <script defer>
        $exit = document.getElementById("exit");
        $exit.addEventListener("mousedown",push);
        function push(){
            $exit.style.borderWidth = "3px";
        }
        $exit.addEventListener("mouseup",up);
        function up(){
            $exit.style.borderWidth = "1px";
        }
    </script>
<?php



