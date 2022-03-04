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
<form method="post">
    <p><b>Введите данные:</b></p>

    <?php if (empty($_POST['text'])): ?>
    <p style="color: red">Textarea пустая!!!</p>
    <?php endif; ?>

    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
</form>
<?php
$fp = fopen("./file.txt", "w");
fwrite($fp, "{$_POST['text']}");
fclose($fp);

$fp = fopen("./file.txt", "r");
while (!feof($fp)) {
    $str = fgets($fp);
    echo $str;
}
fclose($fp);

?>
</body>
</html>
