<?php

//создаём "чертёж" автомобиля
class Car{

//  создаём модель определённой марки автомобиля
    private $model;

//  вставляем двигатель на заводе
    private Engine $engine;

//  первоначальный пробег нового автомобиля — 0 км.
    private $distance = 0;

    public function __construct($model, Engine $engine){
        $this->model = $model;
        $this->engine=$engine;
    }

//  получаем количество оставшегося бензина
    public function getFuel(){
        return $this->engine->getFuel();
    }

//  устанавливаем количество бензина
    public function setFuel($fuel){
        $this->engine->setFuel($fuel);

    }

//  получаем текущий пробег автомобиля
    public function getDistance(){
        return $this->distance;
    }

    public function move($km){
        $this->distance += $km;
        echo "В баке осталось ".$this->engine->getFuel()."л. бензина".'<br>';
            if ($this->engine->getFuel() >= $km) {
                $this->engine->moveFuel($km);
                echo "мы порехали $km километров и потратили $km литров бензина".'<br>';
                echo "общий пробег автомобиля после поездки — $this->distance".'<br>';
                echo '<br>';
                return true;

            } else {
                echo 'Бензина недостаточно, пополните бак'.'<br>';
                return false;
            }
    }
}

class Engine{

//  создаем бензобак для топлива
    private int $fuel;

//  устанавливаем мощность двигателя
    private float $engineCap;

//  заливаем топливо при установке двигателя в первый раз
    public function __construct($fuel, $engineCap){
        $this->fuel=$fuel;
        $this->engineCap=$engineCap;
    }

//  заливаем бензин в бак
    public function setFuel($fuel){
        $this->fuel = $fuel;
    }
//  получаем количество топлива в баке
    public function getFuel(): int
    {
        return $this->fuel;
    }
//  уменьшаем количество бензина в зависимости от пройденного пути (пока 1к1)
    public function moveFuel($fuel){
        $this->fuel-=$fuel;
    }
}

//  создаем авто марки БМВ модель "Х5", заливаем 5л бензина и делаем объём двигателя(пока не используем объём)
$BMW = new Car('X5', new Engine(5, 2));

//двигаемся по 1км, пока топливо не закончится
for ($i=1, $j = $BMW->getFuel(); $i <= $j; $i++){
    $BMW->move(1);
}

//  заливаем 2 литра бензина
$BMW->setFuel(2);

//  продолжаем движение после заправки
for ($i=1, $j = $BMW->getFuel(); $i <= $j; $i++){
    $BMW->move(1);
}

