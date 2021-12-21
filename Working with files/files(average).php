<!--Задача #2: Создать программу которая-->
<!--принимает текстовую информацию с формы (textarea)-->
<!---->
<!--заносит содержимое в текстовый файл в новую строку (добавляет не удаляя существующие данные с файла)-->
<!--считываются данные с файла (НЕЛЬЗЯ ПРОПУСКАТЬ ДАННЫЙ ШАГ И БРАТЬ ДАННЫЕ С массива $_POST) --->
<!--тест должен считываться именно с файла-->
<!---->
<!--выводит содержимое на экран под формой ввода-->
<!---->
<!--PS> по итогу у вас получиться текстовое поле куда вводятся какие либо комментарии и после POST отправки комментарии на сервер-->
<!--- заносятся в файл, сразу считываются с файла и выводятся под формой ввода т.е. обычная форма с комментариями-->

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
        <textarea name="textarea" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if($_POST){
        $creat = fopen("prushak.txt","a");
        fwrite($creat,$_POST["textarea"]."\n");
    }else echo "input text!!!";
    echo file_get_contents("prushak.txt");

