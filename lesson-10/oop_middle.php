<?php

class Building{

    private $name;
    private $type;
    private $duty;
    private Owner $owner;

    public function __construct($name, $type, $duty, Owner $owner)
    {
        $this->name = $name;
        $this->type = $type;
        $this->duty = $duty;
        $this->owner = $owner;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDuty()
    {
        return $this->duty;
    }

    public function getOwner(): Owner
    {
        return $this->owner;
    }

    function calc(){
        return $this->getOwner()->getSalary() * ($this->getDuty() / 100);
    }

}


class Owner
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

$building = new Building("Moscow-Vienna", "mall", 20, new Owner("Vladimir", 2000));

echo "Owner's name: ".$building->getOwner()->getName();
echo "<br>";
echo "Building's name: ".$building->getName();
echo "<br>";
echo "The type of building: ".$building->getType();
echo "<br>";
echo "General sum of duty: ".$building->calc();


