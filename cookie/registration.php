<?php
    session_start();
    include_once "reg.php";
    checkAll("name","lastname","email","login","password","file");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styleForRegistration.css">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label><span>name</span>
            <div>
                <input type="text" name="name" placeholder="write in">
                <p>
                    <?php reg("name");?>
                </p>
            </div>
        </label>
        <label><span>lastname</span>
            <div>
                <input type="text" name="lastname" placeholder="write in">
                <p><?php reg("lastname"); ?></p>
            </div>
        </label>
        <label><span>email</span>
            <div> <input type="text" name="email" placeholder="write in">
                <p><?php reg("email"); ?></p>
            </div>
        </label>
        <label><span>login</span>
            <div> <input type="text" name="login" placeholder="write in">
                <p><?php reg("login"); ?></p>
            </div>
        </label>
        <label><span>password</span>
            <div><input type="password" name="password" placeholder="write in">
                <p><?php reg("password"); ?></p>
            </div>
        </label>
        <input type="file" name="file" class="file_submit">
        <p class="fileRed"><?php checkFile("file")?></p>
        <input type="submit" value="push to server" id="click">
    </form>
</body>
</html>
<?php








