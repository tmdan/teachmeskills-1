<?php
    class Dog
    {
        private $name;
        private $breed;
        private $age;
        private $color;
        public function __construct($name, $breed, $age, $color) {
            $this->name = $name;
            $this->breed = $breed;
            $this->age = $age;
            $this->color = $color;
        }
        public function getNamePet() {
            return $this->name;
            }
        public function getBreed() {
            return $this->breed;
            }
        public function getAgePet() {
            return $this->age;
            }
        public function getColorPet() {
            return $this->color;
            }
        public function golos() {
                echo "GAV-GAV<br><br>";
            }
    }
    $dog = new Dog("Sofie", "French Buldog", 4, "brown");

    echo "Name: " . $dog->getNamePet() . "<br>";
    echo "Breed: " . $dog->getBreed() . "<br>";
    echo "Age: " . $dog->getAgePet() . "<br>";
    echo "Color: " . $dog->getColorPet() . "<br><br>";
    $dog->golos();
