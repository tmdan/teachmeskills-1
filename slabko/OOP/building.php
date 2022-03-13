<?php

class building
{
    public $name;
    public $specification;
    public $taxRate;
    public $owner;

    public function calc()
    {
        return $this->owner->ownerProfit * $this->taxRate / 100;
    }

    public function __construct($name, $specification, $taxRate, Owner $owner)
    {
        $this->name = $name;
        $this->specification = $specification;
        $this->taxRate = $taxRate;
        $this->owner = $owner;
    }
}

class Owner
{
    public $ownerName;
    public $ownerProfit;

    public function __construct($ownerName, $ownerProfit) {
        $this->ownerName = $ownerName;
        $this->ownerProfit = $ownerProfit;
    }
}

$owner = new Owner('Maksim', 1000);
$building = new building('Mariot', 'Hotel', 100, $owner);

echo 'Total tax amount '.$owner->ownerName.' is '.$building->calc();
echo '<br />';
echo 'The hotel name is '.$building->name.' the specification is '.$building->specification;