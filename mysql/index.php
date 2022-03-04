<?php

$host = 'localhost'; // адрес сервера
$db_name = 'universities2'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

// создание подключения к базе
$connection = mysqli_connect($host, $user, $password, $db_name);

// текст SQL запроса, который будет передан базе
$query = 'SELECT * FROM `universities`';

// выполняем запрос к базе данных
$result = mysqli_query($connection, $query);

// выводим полученные данные
while($row = $result->fetch_assoc()){
    echo  $row['id'];
    echo  ' - ';
    echo  $row['name'];
    echo  '<br>';
}

// закрываем соединение с базой
mysqli_close($connection);