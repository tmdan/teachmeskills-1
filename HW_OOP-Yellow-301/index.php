<?php

class Car
{
    private string $name;
    private Engine $engine;

    public function __construct($name, $engine)
    {
        $this->name = $name;
        $this->engine = $engine;
    }

    //Реализация движения машины
    public function move()
    {
        if ($this->engine->getFuel() > 0) {
            $this->engine->gasMileage();
            echo '<br>Проехал 1 км';
        } else {
            echo '<br>Топливо закончилось';
        }
    }

    //Заправляем машину
    public function getFuel($fuel)
    {
        $this->engine->addFuel($fuel);
        echo '<br>Бензобак пополнен на ' . $fuel . ' лтр';
    }
    //Количество топливо
    public function fuel() {
        if($this->engine->getFuel() > 0) {
            echo '<br>Осталось ' . $this->engine->getFuel() . ' лтр';
        }
    }
}

class Engine
{
    private int $gasTank;

    //Сжигает топливо из бака
    public function gasMileage()
    {
        $this->gasTank--;
    }

    //Показывает, сколько топлива в баке
    public function getFuel()
    {
        return $this->gasTank;
    }

    //Пополняет топливо без конструктора
    public function addFuel($fuel)
    {
        $this->gasTank += $fuel;
    }

    function __construct($gasTank = 5)
    {
        $this->gasTank = $gasTank;
    }

}

$engine = new Engine(5);
$car = new Car('BMW', $engine);
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->getFuel(4);
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();
$car->fuel();
$car->move();


