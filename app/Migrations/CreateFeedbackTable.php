<?php

namespace App\Migrations;

use App\Components\Db;
use App\Components\Migration;
use PDOException;

class CreateFeedbackTable extends Migration
{
    const TABLE_NAME = 'feedbacks';

    public static function up()
    {
        // sql to create table

        $sql = "CREATE TABLE `feedbacks`(" .
            "id int  AUTO_INCREMENT PRIMARY KEY," .
            "firstname VARCHAR(30) NOT NULL," .
            "lastname VARCHAR(30) NOT NULL," .
            "phone VARCHAR(12) NOT NULL UNIQUE," .
            "email VARCHAR(50) NOT NULL UNIQUE," .
            "comment TEXT NOT NULL" .
            ")";

        (new Db)->getConnection()->query($sql);

    }
}