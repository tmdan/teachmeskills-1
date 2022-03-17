<?php

namespace App\Migrations;

use App\Components\Db;
use App\Components\Migration;
use PDOException;

class CreateSlidersTable extends Migration
{
    const TABLE_NAME = 'feedbacks';

    public static function up()
    {
        // sql to create table

        $sql = "CREATE TABLE `sliders`(" .
            "id int  AUTO_INCREMENT PRIMARY KEY," .
            "url VARCHAR(500) NOT NULL" .
            ")";

        (new Db)->getConnection()->query($sql);
    }
}