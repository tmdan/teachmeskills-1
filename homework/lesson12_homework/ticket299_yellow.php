<?php
class Car{

    private $model;
    private $engine;

    public function __construct($model, $engine){
        $this->model = $model;
        $this->engine = $engine;
    }

    public function getModel(){
        return $this->model;
    }

    public function getFuel(){
        return $this->engine->getFuel();
    }
    public function move(){
        if ($this->engine->getFuel() > 0) {

            echo "<br>"."Проехали 1 км"."<br>";
            $this->engine->fuelBurn();
        } else {
            echo "<br>"."Бензин закончился, необходимо запрвиться"."<br>";
        }
    }

    public function gasStation(){
        $this->engine->fuelAdd();
    }

}

class Engine{

    private $fuel;

    public function __construct($fuel)
    {
        $this->fuel = $fuel;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function fuelBurn()
    {
        return $this->fuel--;
    }

    public function fuelAdd()
    {
        return $this->fuel++;
    }

}

$car = new Car("Ford", new Engine(5));

echo "<br>"."Модель машины - ".$car->getModel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->gasStation();
$car->gasStation();
echo "<br>"."Заехали на заправку"."<br>";
echo "<br>"."Топливо после зправки-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

$car->move();
echo "<br>"."Топливо на данный момент-".$car->getFuel()."<br>";

