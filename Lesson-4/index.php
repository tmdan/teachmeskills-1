<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>

<form method="post">
    <p><b>Введите ваши данные</b></p>

    <?php

    /*if (array_key_exists('send',$_POST))
    {
       foreach ($_POST as $key=>$el)
            if ( empty($el)  ){
                echo "<p>Введите данные $key</p>"  ;
            }
    }*/
    ?>

    <?php

    function checkFilling ($element, $fieldName){
        if (array_key_exists('send',$_POST) && empty($_POST[$element]))
        {
            echo "<p class='field-not-filled'>Заполните поле " . $fieldName . "</p>" ;
        }
    }

    checkFilling("first_name", "Имя");
    ?>
    <p>Имя <input type="input" name="first_name"><br></p>

    <?php
    checkFilling("last_name", "Фамилия");
    ?>
    <p>Фамилия <input type="input" name="last_name"><br></p>

    <?php
    checkFilling("email", "email");
    ?>
    <p>email <input type="email" name="email"><br></p>

    <?php
    checkFilling("password", "пароль");
    ?>
    <p>Пароль <input type="password" name="password"><br></p>

    <p><input name="send" type="submit"></p>

</form>

</body>
</html>

