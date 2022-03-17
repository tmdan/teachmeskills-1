<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\Feedback;

class AddFeedbacks extends Migration
{
    public static function AddFeedbacks()
    {
        $names = array('Yana', 'Inna', 'Anna', 'Viktoria', 'Nadezhda', 'Marina', 'Yulia');
        $lastnames = array ('Nikolaenko', 'Bondarenko', 'Yakovleva', 'Kravtsova', 'Petrova', 'Ivanove', 'Sidorova');
        $emails = array('123aa@mail.ru', 'bla-bla@gmail.com', 'brs@index.ru', 'mamama@gmail.com', 'uaua@mail.ru', 'vvv@mail.ru', 'www123@gmail.com');
        $phones = array('375445109267', '375295109267', '375336000000', '375441054120', '375290000000', '375441329587', '375332148596');
        $comment = array('отзыв1', 'отзыв2', 'отзыв3', 'отзыв4', 'отзыв5', 'отзыв6', 'отзыв7');

        for ($i=0; $i<count($emails);$i++)
        {
            Feedback::create("$names[$i]", "$lastnames[$i]", "$emails[$i]", "$phones[$i]", "$comment[$i]");
        }
        echo "Feedback added successfully" . "<br>";
    }

}