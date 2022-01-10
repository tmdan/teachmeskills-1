<?php
class Building{
    private string $name;
    private string $type;
    private int $taxValue;
    private Owner $owner;

    public function __construct ($name, $type, $taxValue, Owner $owner){
        $this->name = $name;
        $this->type = $type;
        $this->taxValue = $taxValue;
        $this->owner = $owner;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTaxValue(): int
    {
        return $this->taxValue;
    }
    public function calc(){
        return ($this->owner->getCash()*$this->getTaxValue())/100;
    }
}

class Owner{
    private string $name;
    private int $cash;

    public function __construct($name, $cash){
        $this->name = $name;
        $this->cash = $cash;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCash(): int
    {
        return $this->cash;
    }
}

$owner = new Owner('Anton', 10000);

$building = new Building('Ramonak', 'Shop', 25, $owner);

echo "<br>"."Здание - ".$building->getType()."<br>";
echo "<br>"."Название - ".$building->getName()."<br>";
echo "<br>"."Владелец - ".$owner->getName()."<br>";
echo "<br>"."Сумма налога - ".$building->calc()."<br>";

?>

