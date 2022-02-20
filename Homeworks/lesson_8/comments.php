<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form name="comments" method="post">
    <textarea type="text" name="user_text" placeholder="какой-то текст"></textarea>
    <br>
    <input type="submit" value="ОТПРАВИТЬ)"></form>

</body>
</html>

<?php

$path = __DIR__.'\\'.'logs';
if (!file_exists($path)){
    mkdir($path);
}
if (!file_exists($path.'/logi.txt')){
    chdir($path);
    $file = fopen('logi.txt', 'a+');
    file_put_contents($path.'/logi.txt', 'файл создан — '.date('m-d-Y H:i:s'), FILE_APPEND);
    fclose($file);
} else {
    chdir($path);
    $file = fopen($path.'/logi.txt', 'r+');
    echo nl2br(file_get_contents($path.'/logi.txt', true));
    fclose($file);
}

if(!empty($_POST['user_text'])){
    file_put_contents($path.'/logi.txt', "\n".implode( ', ', $_POST).' — '.date('H:i:s'), FILE_APPEND);
    chdir($path);
    echo nl2br(file_get_contents($path.'/logi.txt'));
}
?>
