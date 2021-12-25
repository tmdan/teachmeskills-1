<?php

class Car{

    private $model;
    private Engine $engine;

    public function __construct($model, Engine $engine)
    {
        $this->model = $model;
        $this->engine = $engine;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getOil(){
        return $this->engine->getOil();
    }

    public function move(){
        if($this->getOil()>0){
            $this->engine->reduceOil();
            echo "You've driven 1 km";
        }else{
            echo "The lack of oil!<br>";
        }
    }
    public function gasStation(){
        $this->engine->addOil();
    }
}


class Engine
{
    private $oil;

    public function __construct($oil)
    {
        $this->oil = $oil;
    }

    public function getOil()
    {
        return $this->oil;
    }
    public function reduceOil(){
        return $this->oil--;
    }
    public function addOil(){
        return $this->oil++;
    }
}

$car = new Car("BMW", new Engine(40));
echo "Model: ".$car->getModel();
echo "<br>";
$car->move();
echo $car->getOil();
$car->gasStation();
$car->move();
echo $car->getOil();
