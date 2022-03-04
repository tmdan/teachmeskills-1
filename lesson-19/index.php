<?php
$driver = 'mysql';
$host = '127.0.0.1:3306';
$db_name = 'universities2';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {

    $connect = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

} catch (PDOException $exception) {

    die($exception->getMessage());

}

$arr_univers = [
    ["name" => 'бгу',
    "address" => 'адрес'],
    ["name" => 'бнту',
        "address" => 'адрес']
    ];

foreach ($arr_univers as $arr_univer)
{
    $result = $connect->prepare( "INSERT universities (name, address) VALUES (:name, :address)");
    $result->execute([":name" => $arr_univer['name'] , ":address" =>$arr_univer['address']]);
}

foreach ($arr_univers as $arr_univer){
    $result = $connect->query( "SELECT * FROM `universities` WHERE name=" . "'" . $arr_univer['name'] . "'" );

    echo "<pre>";
    var_dump($result->fetch(PDO::FETCH_OBJ));
    echo "</pre>";
   // $result = $connect->query( " SELECT * FROM `universities` WHERE name='БГУ' ");
}


//Подготовленные запросы (именованные плейсхолдеры):
/*$result = $connect->prepare( "INSERT universities (name, address) VALUES (:name, :address)");
$result->execute([":name" => "БГУ" , ":address" =>"адрес БГУ"]);

$result = $connect->query( "SELECT * FROM `universities` WHERE name='БГУ'");

echo "<pre>";
var_dump($result->fetch(PDO::FETCH_OBJ));
echo "</pre>";*/