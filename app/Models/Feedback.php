<?php

namespace App\Models;

use App\Components\Db;
use PDO;

class Feedback
{
    public static function create($firstname, $lastname, $email, $phone, $comment)
    {
        $connect = Db::getConnection();

        $sql = "INSERT INTO feedbacks (firstname, lastname, email, phone, comment) 
                VALUES (:firstname, :lastname, :email, :phone ,:comment)";

        $result = $connect->prepare($sql);

        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        $result->execute();

        return $result->fetch(PDO::FETCH_OBJ);
    }

    public static function all()
    {
        $results = Db::getConnection()->query("SELECT id, firstname, lastname, email, phone, comment FROM feedbacks");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function checkFirstnameAndLastname($name){
        return preg_match('/^[a-zA-Zа-яА-ЯёЁ]{2,30}$/ui', $name);
    }

    public static function checkEmail($email)
    {
        return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i', $email);

    }

    public static function checkPhoneNumber($email)
    {
        return preg_match('/^375(29|44|33)[0-9]{3}[0-9]{2}[0-9]{2}$/i', $email);

    }
}