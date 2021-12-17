<?php
if (!file_exists('./maria')) {
    mkdir('./maria', 0700);
} else {
    echo 'файл уже существует';
}
$date= date('Y');
if (!file_exists("./maria/$date")) {
    mkdir("./maria/$date",0700);
} else {
    echo 'файл уже существует';
}
$date1=date('d');
if (!file_exists("./maria/$date/file.txt")) {
    $fp = fopen("file.txt", "w");
    fwrite($fp, "Пашковская $date1");
    fclose($fp);
} else {
    echo 'файл уже существует';
}

