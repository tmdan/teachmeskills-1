<?php
class Car{
    private $model;
    private $color;
    private static $storage = [];

    private function __construct($model, $color){
        $this->model = $model;
        $this->color = $color;
    }
    public static function addCar($model, $color)
    {
        self::$storage[] = new Car($model, $color);
        return self::$storage;
    }

    public function getModel()
    {
        return $this->model;
    }
    public function getColor()
    {
        return $this->color;
    }
    public static function getModelAndColor(){
        foreach (self::$storage as $car){
            echo $car->getColor()." ".$car->getModel()."<br>";
        }
    }
}

$car1 = Car::addCar('lada', 'white');
$car2 = Car::addCar('tesla', 'black');
$car3 = Car::addCar('geely', 'blue');
$car4 = Car::addCar('BMW', 'red');
Car::getModelAndColor();