<?php
    class Pet
    {
        private $name;
        private $kind;
        private $breed;
        private $age;
        private $color;
        public function __construct($name, $kind, $breed, $age, $color) {
            $this->name = $name;
            $this->kind = $kind;
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
            if ($this->kind == "dog") {
                echo "GAV-GAV<br><br>";
            } elseif ($this->kind == "cat") {
                echo "MIAY-MIAY<br><br>";
            } else {
                echo "Not a Cat, Not a Dog";
            }
        }
    }
    $pet = new Pet("Sofie", "dog", "French Buldog", 4, "brown");
    echo "Name: " . $pet->getNamePet() . "<br>";
    echo "Breed: " . $pet->getBreed() . "<br>";
    echo "Age: " . $pet->getAgePet() . "<br>";
    echo "Color: " . $pet->getColorPet() . "<br><br>";
    $pet->golos();
