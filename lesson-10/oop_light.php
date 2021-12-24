<?php
 class Dog{
     private $name;
     private $breed;
     private $countOfLegs;
     private $tailHave;
     function __construct($name, $breed, $countOfLegs, $tailHave){
        $this->name=$name;
        $this->breed=$breed;
        $this->countOfLegs=$countOfLegs;
        $this->tailHave=$tailHave;
     }
     function get_name() {
         return $this->name;
     }
     function get_breed() {
         return $this->breed;
     }
     function get_countOfLegs() {
         return $this->countOfLegs;
     }
     function get_tailHave() {
         return $this->tailHave;
     }
     function golos(){
         echo "Gav";
     }
 }

 $dog = new Dog('Ellis', 'korgy', '4', 'true');
 echo "Name: ".$dog->get_name()."<br>";
 echo "Breed: ".$dog->get_breed()."<br>";
 echo "Count of legs: ".$dog->get_countOfLegs()."<br>";
 echo "Existence of tail: ".$dog->get_tailHave()."<br>";
 echo "What's dog says: ";
 echo  $dog->golos();