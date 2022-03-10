<?php
include './User.php';

$driver = 'mysql';
$host = '127.0.0.1:3306';
$db_name = 'user_base';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $connect = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

    $sql = "CREATE DATABASE IF NOT EXISTS user_base;
            USE user_base;
            CREATE TABLE IF NOT EXISTS users (id integer auto_increment primary key, 
            firstname varchar(150), 
            lastname varchar(150), 
            age integer, phone VARCHAR(20), 
            country varchar(150), 
            city varchar(150));";

    $connect->exec($sql);

    echo "Omg! Success! Database has been created!" . "<br>";
    echo "Table in database has been created!" . "<br>";

} catch (PDOException $exception) {

    die($exception->getMessage());
}

$firstname = "Mark";
$lastname = "Goodman";
$age = 55;
$phone = 123456789;
$country = "Belgium";
$city = "Brussel";

$result = $connect->prepare("INSERT INTO users (firstname, lastname, age, phone, country, city) VALUES ( :firstname, :lastname, :age, :phone, :country, :city )");
$result->bindParam(":firstname", $firstname, PDO::PARAM_STR, 150);
$result->bindParam(":lastname", $lastname, PDO::PARAM_STR, 150);
$result->bindParam(":age", $age, PDO::PARAM_INT, 3);
$result->bindParam(":phone", $phone, PDO::PARAM_INT, 20);
$result->bindParam(":country", $country, PDO::PARAM_STR, 150);
$result->bindParam(":city", $city, PDO::PARAM_STR, 150);

$result->execute();

$result = $connect->query("SELECT * FROM `users`");
while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo "<br>" . $row->firstname . " - " . $row->age . " лет" . "<br>";
}

$result = $connect->query("SELECT * FROM `users`");
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<br>" . $row['country'] . " - " . $row['city'] . "<br>";
}

$result = $connect->query("SELECT * FROM `users`");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    echo "<br>" . $row[2] . " - " . $row[4] . "<br>";
}

$result = $connect->query("SELECT * FROM `users`");
$result->setFetchMode(PDO::FETCH_CLASS, "User");
while ($row = $result->fetch()) {
    $row->getName();
}

