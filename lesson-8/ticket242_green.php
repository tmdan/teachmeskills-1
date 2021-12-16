<?php
echo "Задача:
В корне создайте папку с вашей фамилией 
Создайте подпапку в папке с вашей фамилией - название подпапки должно содержать текущую дату
Создайте внутри папки с годом - файл (проверьте предварительно существует ли файл если существует ничего не выполняйте)
который содержит текстовую информацию (Ваша фамилия - текущее время)" . "<br>";
$dir = "piletski";
if (!file_exists($dir)) {
    mkdir($dir);
    echo "Ready create folder piletski" . "<br>";
};
if (file_exists($dir)) {
    @mkdir("piletski/" . date("Y"));
    };
$text = "Piletski - " . date("F j, Y, g:i a");
$file = "piletski/2021/file.txt";
if (!file_exists("$file")) {
    $fp = fopen("piletski/2021/file.txt", "w");
    fwrite($fp, $text);
    fclose($fp);
    echo "File with info created";
    } else {
        echo "File already exists";
}

