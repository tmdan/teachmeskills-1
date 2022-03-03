<?php

$driver = 'mysql';
$host = '127.0.0.1:3306';
$db_name = 'user_base';
$db_user = 'root';
$db_pass = ''; // пропустить
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $connect = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

    $result = $connect->prepare( "INSERT INTO `adress` (`City`, `Street`, `House`, `Flat_number`) VALUES ( :City, :Street, :House, :Flat_number )");
    $result->execute(['City' => "Minsk", 'Street' => "Street5", 'House' => 7, 'Flat_number' => 8]);

    $show = $connect->query("SELECT * FROM `adress`");

    echo "<pre>";

    var_dump($show->fetch(PDO::FETCH_OBJ));

    echo "</pre>";

} catch (PDOException $exception) {

    die($exception->getMessage());



}

//PDO::FETCH_NUM = 3 - пронумерованный массив
//PDO::FETCH_ASSOC = 2 - ассоциативный массив
//PDO::FETCH_BOTH = 4 - пронумерованный и ассоциативный массив ОДНОВРЕМЕННО (Default)
//PDO::FETCH_OBJ = 5 - строка как объект с именами свойств которые соответствуют именам столбцов


//$result = $connect->query("SELECT * FROM `users`");

//EXAMPLE 1
//{
//
//    echo "<pre>";
//
//    var_dump($result->fetch(PDO::FETCH_OBJ));
//
//    echo "</pre>";
//
//}


//EXAMPLE 2
//{
//    while ($row = $result->fetch(PDO::FETCH_OBJ)){
//        echo $row->id;
//    }
//}


//Подготовленные запросы (именованные плейсхолдеры):



//Подготовленные запросы (позиционные плейсхолдеры):

//$result = $connect->prepare( "SELECT * FROM `users` WHERE id=?");
//$result->execute(["1"]);
//
//echo "<pre>";
//
//var_dump($result->fetch(PDO::FETCH_OBJ));
//
//