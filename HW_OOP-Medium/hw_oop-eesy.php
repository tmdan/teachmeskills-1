<?php
    class Animal {
        private string $name;
        private $gender;
        private $species;
        private $sound;
        public function __construct($name, $gender, $species, $sound)
        {
            $this->name = $name;
            $this->gender = $gender;
            $this->species = $species;
            $this->sound = $sound;
        }
        public function getName() {
            return $this->name;
        }
        public function getGender() {
            return $this->gender;
        }
        public function getSpecies() {
            return $this->species;
        }
        public function saySound() {
            return $this->sound;
        }
}

    $dog = new Animal('Tebul', 'Male', 'German Shepherd', 'gav-gav');
    $cat = new Animal('Kysya', 'female', 'seamean cat', 'may,may');
    echo $dog->getSpecies() . ' по имени ' . $dog->getName() . ' издал звук ' . $dog->saySound(). '<br>';
    echo $cat->getSpecies() . ' по имени ' . $cat->getName() . ' издал звук ' . $cat->saySound();

