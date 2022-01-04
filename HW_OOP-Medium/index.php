<?php
class Building {
    private string $name;
    private string $specification;
    private int $tax_rate;
    public function calc() {
        return $this->owner->getProfit() * $this->getTaxRate() / 100;
    }
    public function __construct($name, $specification, $tax_rate, Owner $owner)
    {
        $this->name = $name;
        $this->spetification = $specification;
        $this->tax_rate = $tax_rate;
        $this->owner = $owner;
    }
    public function getName() {
        return $this->name;
    }
    public function getSpecification() {
        return $this->specification;
    }
    public function getTaxRate() {
        return $this->tax_rate;
    }

}


class Owner {
    private string $name;
    private int $profit;
    public function __construct($name, $profit)
    {
        $this->name = $name;
        $this->profit = $profit;
    }
    public function getName() {
        return $this->name;
    }
    public function getProfit() {
        return $this->profit;
    }

}
$owner = new Owner('Nikita', 1300);
$building = new Building('Hilton', 'Hotel', 600, $owner);

echo 'Сумма налога владельца '. $owner->getName() .' составляет '. $building->calc();