<?php
class User
{
    private $firstname;
    private $lastname;
    private $age;
    private $phone;
    private $country;
    private $city;

    public function getFirstName(){
        echo $this->firstname;
    }
}