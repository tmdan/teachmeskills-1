<?php
$driver = 'mysql';
$host = '127.0.0.1';
$db_name = 'pdotest';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $connect = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
    $connect->query("CREATE TABLE users (id integer auto_increment primary key, firstname varchar(30), lastname varchar(30), age integer, phone varchar(30), country varchar(30), city varchar(30));");
    echo "Table users has been created<br><br>";
    $stmt = $connect->prepare("INSERT INTO users (firstname, lastname, age, phone, country, city) VALUES (:userfirstname, :userlastname, :userage, :userphone, :usercountry, :usercity)");
    $stmt->bindValue(":userfirstname", "Ivan");
    $stmt->bindValue(":userlastname", "Ivanov");
    $stmt->bindValue(":userage", 25);
    $stmt->bindValue(":userphone", +10985552233);
    $stmt->bindValue(":usercountry", "USA");
    $stmt->bindValue(":usercity", "New-York");
    $stmt->execute();
    echo "User add successfully<br><br>";
} catch (PDOException $exception) {
    die($exception->getMessage());
}
echo "Data output:<br><br>";
$result = $connect->query("SELECT * FROM `users`");

//{
//    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//        echo $row->id . " " . $row->firstname . " " . $row->lastname . " " . $row->age . " " . $row->phone . " " . $row->country . " " . $row->city . "<br>";
//    }
//}

//{
//    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//        echo $row["id"] . " " . $row["firstname"] . " " . $row["lastname"] . " " . $row["age"] . " " . $row["phone"] . " " . $row["country"] . " " . $row["city"] . "<br>";;
//    }
//}

//{
//    while ($row = $result->fetch(PDO::FETCH_NUM)) {
//        print_r($row);
//    }
//}

//class User {}
//$result->setFetchMode(PDO::FETCH_CLASS, "User");
//$user = $result->fetch();
//print_r($user);




