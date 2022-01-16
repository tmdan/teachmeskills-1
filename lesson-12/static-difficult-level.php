<?php

/*Создать класс машина (Car) в котором будут
- приватные поля (model, color);
- приватное статическое поле storage - которое будет храниться объекты машин (т.е. самого себя);
- конструктор ПРИВАТНЫЙ!!!! (это значит мы его сможем использовать только внутри класса)
который принимает поля на вход (model, color);
- статический метод addCar(model, color) - внутри данного статического метода надо:
1. Обращаться к приватному конструктору
2. Создать объект машины (можно new Car(model, color) можно new self(model, color))
3. Дописать этот объект в статическое приватное свойство объекта storage в котором будет храниться массив объектов машин.

PS>по итогу получается машину создать можно будет только через статический метод addCar(model, color)
потому-что конструктор имеет приватный доступ.*/

class Car{
    private $model;
    private $color;
    private static $storage = [];

    private function __construct($model, $color){
        $this->model = $model;
        $this->color = $color;
    }

    public static function addCar($model, $color){
        self::$storage[] = new Car($model, $color);
        return self::$storage;
    }

    public static function showInfo(){
        foreach (self::$storage as $car){
            echo $car->showModel() . ", " . $car->showColor() . "<br>";
         }
    }

    public function showModel(){
        return $this->model;
    }

    public function showColor(){
        return $this->color;
    }
}

$cars1 = Car::addCar('BMW', 'red');
$cars2 = Car::addCar('mersedes', 'white');
$cars3 = Car::addCar('volvo', 'green');

echo "Выведу информацию о созданных автомобилях: " . "<br>";
Car::showInfo();
