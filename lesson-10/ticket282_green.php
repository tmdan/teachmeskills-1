<?php
    class Pet
    {
        private $name;
        private $kind;
        private $breed;
        private $age;
        private $color;
        public function __construct($name, $kind, $breed, $age, $color) {
            $this->namePet = $name;
            $this->kindPet = $kind;
            $this->breedPet = $breed;
            $this->agePet = $age;
            $this->colorPet = $color;
        }
        public function getNamePet() {
            return $this->namePet;
            }
        public function getBreed() {
            return $this->breedPet;
            }
        public function getAgePet() {
            return $this->agePet;
            }
        public function getColorPet() {
            return $this->colorPet;
            }
        public function golos() {
            if ($this->kindPet == "dog") {
                echo "GAV-GAV<br><br>";
            } elseif ($this->kindPet == "cat") {
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
