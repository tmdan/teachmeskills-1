<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
</head>
<body>
<form method="post">
    <p>Your comment</p>
    <textarea name="textarea" cols="15" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Add commet">
</form>
</body>
</html>

<?php
if(empty($_POST['textarea'])) echo 'Add some text <br />';

if(!empty($_POST['textarea'])){
    $newFile = fopen('slabko.txt',"a+");
    fwrite($newFile,$_POST["textarea"].'<br />');
    fclose($newFile);
}
echo file_get_contents('slabko.txt');

/*Вопрос: Почему после обновления страницы комментарии не удаляются, а добавляется последний записанный комментарий до
обновления?*/

?>