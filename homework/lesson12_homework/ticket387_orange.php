<?php
class Car{
    private $model;
    private $color;
    private static $storage = [];

    private function __construct($model, $color){
    $this->model = $model;
    $this->color = $color;
    }

    public static function addCar($model, $color){
    self::$storage[] = new Car($model,$color);
    return self::$storage;
    }

    public static function showCars(){
        echo '<pre>' . var_export(self::$storage, true) . '</pre>';
    }

}

$car1 = Car::addCar('Ford', 'Green');
$car2 = Car::addCar('Opel', 'Red');
$car3 = Car::addCar('Nissan', 'Black');
$car3 = Car::addCar('Gelly','Silver');

Car::showCars();
?>