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

class User{
    private string $name;
    private int $age;
    static $index=0;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
        self::$index++;
    }
}
class US extends User{

}
$user = new User("Ilya",25);
echo User::$index;
$user1 = new User("Ilya",25);
echo User::$index;
$user1 = new User("Ilya",25);
echo User::$index;
$user1 = new User("Ilya",25);
echo User::$index;