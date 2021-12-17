<?php
echo "Создать программу которая:
- принимает текстовую информацию с формы (textarea)
- заносит содержимое в текстовый файл в новую строку (добавляет не удаляя существующие данные с файла)
- считываются данные с файла - тест должен считываться именно с файла
выводит содержимое на экран под формой ввода";
?>;
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с формой</title>
</head>
<body>
    <form method="post">
        <p><b>Введите вашу информацию:</b></p>
        <p><textarea rows="10" cols="45" name="textarea"></textarea></p>
        <p><input type="submit" value="Добавить"></p>
    </form>
    <form method="post">
        <p><input type="submit" name="clear" value="Очистить файл"></p>
    </form>
</body>
</html>
<?php
    if (!empty($_POST["textarea"])) {
        $file = @fopen("file.txt", "a");
        fputs($file, $_POST["textarea"] . "\r\n");
        fclose($file);
    }
    $file = @fopen("file.txt", "r");
    if ($file) {
        while (($buffer = fgets($file)) !== false) {
        echo $buffer . "<br>";
        } fclose($file);
    }
    if(isset($_POST["clear"])) {
        $file = @fopen("file.txt","w");
        ftruncate($file, 0);
        fclose($file);
        header("Location: ticket251_yellow.php");
    }
//$str = htmlentities(file_get_contents("file.txt"));
//echo $str;
?>