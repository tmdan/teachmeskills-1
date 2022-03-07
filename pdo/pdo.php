<?php

include './User.php';

$driver = 'mysql';
$host = '127.0.0.1:3306';
$db_name = 'pharmacy';
$db_user = 'root';
$db_pass = ''; // пропустить
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {

    $connect = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

    $connect->exec("CREATE DATABASE IF NOT EXISTS  test;
                    USE test;
                    CREATE TABLE IF NOT EXISTS Users 
                        (id INTEGER AUTO_INCREMENT PRIMARY KEY, 
                        firstname VARCHAR(30),
                        lastname VARCHAR(30),
                        age INTEGER,
                        phone INTEGER,
                        country VARCHAR(30),
                        city VARCHAR(30))
    ;");
} catch (PDOException $exception) {

    die($exception->getMessage());

}
$firstname = "Misha";
$lastname = "End";
$age = 37;
$phone = 666009;
$country = "US";
$city = "New York";

$result = $connect->prepare( "INSERT users (firstname, lastname, age, phone, country, city) 
                            VALUES (:firstname, :lastname, :age, :phone, :country, :city)");
$result->bindParam(":firstname" , $firstname, PDO::PARAM_STR);
$result->bindParam(":lastname", $lastname, PDO::PARAM_STR);
$result->bindParam(":age" ,$age, PDO::PARAM_INT);
$result->bindParam(":phone" ,$phone, PDO::PARAM_INT);
$result->bindParam(":country" ,$country, PDO::PARAM_STR);
$result->bindParam(":city" ,$city, PDO::PARAM_STR);

$result->execute();


$result = $connect->query("SELECT * FROM `Users`");

while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo $row->firstname;
}
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['firstname'];
}
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    echo $row[1];
}

$result->setFetchMode(PDO::FETCH_CLASS, "User");

while ($row = $result->fetch()){
    $row->getFirstName();
}