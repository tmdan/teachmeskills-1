<?php
//Цель: Научиться работать со статическими данными в ООП
//
//Задача: Создать класс машина (Car) в котором будут
//- приватные поля (model, color);
//- приватное статическое поле storage - которое будет храниться объекты машин (т.е. самого себя);
//- конструктор ПРИВАТНЫЙ!!!! (это значит мы его сможем использовать только внутри класса)
//который принимает поля на вход (model, color);
//- статический метод addCar(model, color) - внутри данного статического метода надо:
//1. Обращаться к приватному конструктору
//2. Создать объект машины (можно new Car(model, color) можно new self(model, color))
//3. Дописать этот объект в статическое приватное свойство объекта storage в котором будет храниться массив объектов машин.
//
//PS>по итогу получается машину создать можно будет только через статический метод addCar(model, color)
//потому-что конструктор имеет приватный доступ.

class Car{
    private string $model;
    private string $color;
    private static $storage=[]; //при создании нового экземпляра класса, данное свойство не откатывается(в чем и есть плюс статических свойств,методов и т.д.)
    private function __construct($model,$color)
    {
        $this->model=$model;
        $this->color=$color;
    }
    public static function addCar($model,$color){
        array_push(self::$storage,new Car($model,$color));
    }
    public static function getStorage(){
        return self::$storage;
    }
}
Car::addCar("Mazda","red");
Car::addCar("Mazda2","red2");
Car::addCar("Mazda3","red3");
var_dump(Car::getStorage());
