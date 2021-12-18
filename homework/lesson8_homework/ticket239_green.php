<?php
$name = 'ascheulov';

if (!file_exists("./$name")) {
    mkdir("./$name");
}else{
        echo 'Папка с именем '.$name.' существует';
}

$year = date('Y');
if (!file_exists("./$name/$year")){
    mkdir("./$name/$year");
}else{
    echo 'Папка с именем '.$year.' существует';
}

$time = date ('H:m:s');
if (!file_exists("./$name/$year/1.txt")){
    $fp = fopen("./$name/$year/1.txt", "w");
    fwrite($fp, "$name - $time");
}else{
    echo 'Файл с именем 1.txt существует';
}
?>;