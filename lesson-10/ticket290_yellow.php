<?php
    class Building {
        private $name;
        private $type;
        private $rent;
        private Owner $owner;
        public function __construct($name, $type,int $rent, Owner $owner) {
            $this->name = $name;
            $this->type = $type;
            $this->rent = $rent;
            $this->owner = $owner;
        }
        public function getName() {
            return $this->name;
        }
        public function getType() {
            return $this->type;
        }
        public function getRent(): int {
            return $this->rent;
        }
        public function getOwner(): Owner {
            return $this->owner;
        }
        public function calc() {
            return $this->getOwner()->getPriceOwner() * $this->getRent() / 100;
        }
    }
    class Owner {
        private $name;
        private $price;
        public function __construct($name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function getNameOwner()
        {
            return $this->name;
        }
        public function getPriceOwner(): int
        {
            return $this->price;
        }
    }
    $building = new Building("House", "Private property", 25, new Owner("Roman P.", 2000));
    echo "Здание : " . $building->getName() . "<br>";
    echo "Вид собственности: " . $building->getType() . "<br>";
    echo "Ставка налога: " . $building->getRent() . "%" . "<br>";
    echo "Владелец: " . $building->getOwner()->getNameOwner() . "<br>";
    echo "Доход владельца: " . $building->getOwner()->getPriceOwner() . "<br>";
    echo "Рассчитанный налог: " . $building->calc();
