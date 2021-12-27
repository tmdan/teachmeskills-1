<?php
    class Building {
        private $name;
        private $type;
        private $rent;
        private Owner $owner;
        public function __construct($name, $type,int $rent, Owner $owner) {
            $this->nameBuilding = $name;
            $this->typeBuilding = $type;
            $this->rentBuilding = $rent;
            $this->owner = $owner;
        }
        public function getNameBuilding() {
            return $this->nameBuilding;
        }
        public function getTypeBuilding() {
            return $this->typeBuilding;
        }
        public function getRentBuilding(): int {
            return $this->rentBuilding;
        }
        public function getOwner(): Owner {
            return $this->owner;
        }
        public function calc() {
            return $this->getOwner()->getPriceOwner() * $this->getRentBuilding() / 100;
        }
    }
    class Owner {
        private $name;
        private $price;
        public function __construct($name, int $price) {
            $this->nameOwner = $name;
            $this->priceOwner = $price;
        }
        public function getNameOwner()
        {
            return $this->nameOwner;
        }
        public function getPriceOwner(): int
        {
            return $this->priceOwner;
        }
    }
    $building = new Building("House", "Private property", 25, new Owner("Roman P.", 2000));
    echo "Здание : " . $building->getNameBuilding() . "<br>";
    echo "Вид собственности: " . $building->getTypeBuilding() . "<br>";
    echo "Ставка налога: " . $building->getRentBuilding() . "%" . "<br>";
    echo "Владелец: " . $building->getOwner()->getNameOwner() . "<br>";
    echo "Доход владельца: " . $building->getOwner()->getPriceOwner() . "<br>";
    echo "Рассчитанный налог: " . $building->calc();
