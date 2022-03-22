<?php

namespace App\Models;

use App\Components\Db;
use PDO;

class Sliders
{
    public static function addSlider($firstname){
        $connect = Db::getConnection();

        $sql = "INSERT INTO sliders (url) 
                VALUES (:url)";

        $result = $connect->prepare($sql);

        $result->bindParam(':url', $firstname, PDO::PARAM_STR);

        $result->execute();

        return $result->fetch(PDO::FETCH_OBJ);
    }

    public static function all(){
        $results = Db::getConnection()->query("SELECT * FROM sliders");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteById($id){
        $connect = Db::getConnection();

        $sql = "DELETE FROM sliders WHERE id = :id";

        $result = $connect->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_STR);

        $result->execute();

        return $result->fetch(PDO::FETCH_OBJ);
    }

    public static function getById($id){
        $connect = Db::getConnection();

        $sql = "SELECT * FROM sliders WHERE id = :id";

        $result = $connect->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_STR);

        $result->execute();

        return $result->fetch(PDO::FETCH_OBJ);
    }
}