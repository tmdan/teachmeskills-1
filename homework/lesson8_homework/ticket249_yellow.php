<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Комментарии</title>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
    <p>Введите комментарий<p>
        <?php
        if (isset($_POST['comment']) and empty($_POST['comment'])):?>
        <br><p style="color: red"> Вы не ввели комментарий <p><br>
        <?php endif?>
    <textarea name="comment" rows="4" cols="50"></textarea>
    <p><input name="send" type="submit" value="Отправить комментарий"></p>
    <p>Комментарии:</p>
</form>
</body>
</html>
<?php
if (array_key_exists('send', $_POST)){
    $fp = fopen("./comment.txt", "a+t");
    fwrite($fp, "{$_POST['comment']}\n\n");
    fclose($fp);
}

$comment = fopen("./comment.txt", 'rb');
if ($comment) {
    while (($buffer = fgets($comment)) !== false) {

        echo $buffer."<br>";
    }
}
fclose($comment);
?>