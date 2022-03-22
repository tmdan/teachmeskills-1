<?php

namespace App\Migrations;

use App\Components\Db;
use App\Components\Migration;
use PDOException;

class CreateSlidersTable extends Migration
{
    const TABLE_NAME = 'sliders';

    public static function up()
    {
        // sql to create table

        $sql = "CREATE TABLE `sliders`(" .
            "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY," .
            "url VARCHAR(500) NOT NULL" .
            ")";

        (new Db)->getConnection()->query($sql);
        die;


        if (!self::tableExist(self::TABLE_NAME)) {

            try {

                (new Db)->getConnection()->query($sql);

                self::consoleMessage(printf("Table %s created successfully", self::TABLE_NAME));

            } catch (PDOException $exception) {

                self::consoleMessage($exception->getMessage());

            }

        } else {

            self::consoleMessage(printf("Table %s already exist", self::TABLE_NAME));

        }
    }


    static public function down()
    {
        if (self::tableExist(self::TABLE_NAME)) {

            self::deleteTable(self::TABLE_NAME);

            self::consoleMessage(printf("Table %s successfully deleted", self::TABLE_NAME));

        } else {

            self::consoleMessage(printf("Table %s already deleted", self::TABLE_NAME));
        }
    }


}