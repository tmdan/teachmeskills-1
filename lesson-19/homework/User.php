<?php

class User
{
    private $firstname;
    private $lastname;
    private $age;
    private $phone;
    private $country;
    private $city;

    public function getInfo(){
        echo $this->firstname . " " . $this->lastname . " (выведено с помощью PDO::FETCH_CLASS)" . "<br>";
    }
}

