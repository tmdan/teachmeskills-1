<?php
//Задача #1
//1)В корне создайте папку с вашей фамилией (необходимо проверить если папка уже существует то оставляем без изменений)
//в мелком шрифте используя латинские символы

//2)Создайте подпапку в папке с вашей фамилией - название подпапки должно содержать текущую дату
//(а именно текущий год) PS>для получения используйте функцию date()

//3)Создайте внутри папки с годом - файл (проверьте предварительно существует ли файл если существует ничего не выполняйте)
//который содержит текстовую информацию (Ваша фамилия - текущее время) PS>
//Для получения текущего времени используйте функцию date()

function createFolder($name,$subName,$nameInSubName){
    if(!is_dir($name)){
        mkdir(strtolower($name)); // 1)creat a dir with my lastname
        echo "GOOD";
    }
    if(file_exists("$name")){
        mkdir("$name/$subName"); // 2)creat a subdir with a current year
        echo "GOOD";
    }
    if(file_exists("$name/$subName")){
        if(!file_exists("$name/$subName/$nameInSubName")){
            $creat = fopen("$name/$subName/$nameInSubName","w"); // 3)creat a file. Inside my lastname + h:m:s
            fwrite($creat,"Prushak ".date("H:i:s"));
        }
    }
}
createFolder("prushak",date("Y"),"prushak.txt");
