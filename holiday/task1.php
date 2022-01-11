<?php
/*Создать объект космический корабль
Приватные свойства
- Название (string)
- скорость(int)  в кл/c - километро в секунду
- маршрут (объект Planet)

Публичные методы (можно все через конструктор установить):
- Установить скорость вашего космического судна
- Установить название
- Установить маршрут (принимает в себя объект Planet)
- Получить время в годах наверное или в днях,  за которое ваш корабль достигнет планету (надо учитывать скорость)



Маршруты:
-------------------------------------
Объект Planet
Приватные свойства:
- Название планеты (string) - Например (луна, марс, венера, юпитер)
- Расстояние до земли (int) в километрах - можете взять реальные данные

Публичные свойства:
- Установить название
- Установить расстояние до земли*/

class Spaceship{
    private $name;
    private $speed;
    private $route;

    public function __construct($name, $speed,Planet $route){
        $this->name = $name;
        $this->speed = $speed;
        $this->route = $route;
    }

    public function getTravelTime(){
        return $this->route->getDistance()/$this->speed/60/60/24; //расстояние в сутках
    }

    public function getName(){
        return $this->name;
    }

}

class Planet{
    private $name;
    private $distance;

    public function __construct($name, $distance){
        $this->name = $name;
        $this->distance = $distance;
    }

    public function getDistance(){
        return $this->distance;
    }

    public function getName (){
        return $this->name;
    }
}

$Mars = new Planet('Mars', "55760000");
$Mariner4 = new Spaceship('Mariner4', '11,2', $Mars);
echo 'Космический корабль ' . $Mariner4->getName() . ' достигнет ' . $Mars->getName() . " за " . $Mariner4->getTravelTime() . " суток.";