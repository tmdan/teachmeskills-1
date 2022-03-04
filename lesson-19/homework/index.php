<?php

/*С помощью расширения PDO выполните следующую задачу:

Создайте таблицу users c полями (firstname, lastname, age, phone, country, city),
используя функцию query - PS> подсказка тут - https://metanit.com/php/mysql/2.2.php;

Занесите данные в таблицу users используя подготовленные запросы,
а именно ОБЯЗАТЕЛЬНЫ к использованию функции bindParam, prepare, execute - PS>
подсказка тут - https://metanit.com/php/mysql/2.3.php ;

Выведите на экран данные из таблицы users используя доступные модификаторы вывода данных -
PS> подсказка тут - https://metanit.com/php/mysql/2.4.php:
ассоциативный массив - PDO::FETCH_ASSOC
массив из объектов StdObj - PDO::FETCH_OBJ
числовой массив - PDO::FETCH_NUM
используя класс User - массив из объектов User - PDO::FETCH_CLASS*/

include "../homework/User.php";

try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "root", "");

    // установка режима вывода ошибок
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL-выражение для создания/подключения базы данных
    $sql = "CREATE DATABASE IF NOT EXISTS homework_19;
            USE homework_19;
            CREATE TABLE IF NOT EXISTS users (id integer auto_increment primary key, firstname varchar(30), 
            lastname varchar(30), age integer, phone VARCHAR(12), country varchar(150), 
            city varchar(150));";

    // выполняем SQL-выражение
    $conn->query($sql);

}
catch (PDOException $exception) {
    echo "Database error: " . $exception->getMessage();
}

$firstname = "Ivan";
$lastname = "Semenov";
$age = 25;
$phone = "375295564550";
$country = "Belarus";
$city = "Minsk";

//Подготовленные запросы (именованные плейсхолдеры):
$result = $conn->prepare( "INSERT users (firstname, lastname, age, phone, country, city) 
                            VALUES (:firstname, :lastname, :age, :phone, :country, :city)");
$result->bindParam(":firstname" , $firstname, PDO::PARAM_STR, 30);
$result->bindParam(":lastname", $lastname, PDO::PARAM_STR, 30);
$result->bindParam(":age" ,$age, PDO::PARAM_INT);
$result->bindParam(":phone" ,$phone, PDO::PARAM_STR, 12);
$result->bindParam(":country" ,$country, PDO::PARAM_STR, 150);
$result->bindParam(":city" ,$city, PDO::PARAM_STR, 150);

$result->execute();


// вывод данных
$result = $conn->query("SELECT * FROM `users`");

while ($row = $result->fetch(PDO::FETCH_OBJ)){
        echo $row->firstname . " " . $row->lastname . " (выведено с помощью PDO::FETCH_OBJ)" . "<br>";
    }

$result = $conn->query("SELECT * FROM `users`");

while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo $row['firstname'] . " " . $row['lastname'] . " (выведено с помощью PDO::FETCH_ASSOC)"  . "<br>";
}

$result = $conn->query("SELECT * FROM `users`");

while ($row = $result->fetch(PDO::FETCH_NUM)){
    echo $row[1] . " " . $row[2] . " (выведено с помощью PDO::FETCH_NUM)".  "<br>";
}

$result = $conn->query("SELECT * FROM `users`");
$result->setFetchMode(PDO::FETCH_CLASS, "User");

while ($row = $result->fetch()){
   $row->getInfo();
}