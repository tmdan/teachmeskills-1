<?php
 echo 'Задача #1
В корне создайте папку с вашей фамилией (необходимо проверить если папка уже существует то оставляем без изменений) в мелком шрифте используя латинские символы
Создайте подпапку в папке с вашей фамилией - название подпапки должно содержать текущую дату (а именно текущий год) PS>для получения используйте функцию date()
Создайте внутри папки с годом - файл (проверьте предварительно существует ли файл если существует ничего не выполняйте) который содержит текстовую информацию (Ваша фамилия - текущее время) PS> Для получения текущего времени используйте функцию date()<br><br>';

$folderName = 'rashkevich';
$path = __DIR__;
$dataArray = scandir($path);
    if (!in_array($folderName, $dataArray)) {
        mkdir($folderName, 0777, true);
        echo "Папка с именем $folderName успешно создана <br>";
    } else {
            echo "Папка с именем $folderName уже существует <br>";
        }

$path = __DIR__.'\\'.$folderName;
chdir($path);
$dataArray = scandir($path);
if(!in_array(date('Y'), $dataArray)){
    mkdir(date('Y'));
}
$path = $path.'\\'.date('Y');
chdir($path);
if(!in_array('file.txt', scandir($path))) {
    $file = fopen('file.txt', 'w+');
    fwrite($file, date('H:i:s') . " " . $folderName);
    fclose($file);
    echo ' данные в файл file.txt успешно добавлены';
} else echo 'файл file.txt существует и перезапись невозможна';
