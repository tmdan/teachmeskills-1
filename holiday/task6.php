<?php
/*Задание создание автосалона с возможностью добавления любого автомобиля который реализовал интерфейс CarInterface,
при в каждый автомобиль есть возможность установить двигатель любого объекта
который также реализовал интерфейс EngineInterface.
1 часть:
Создать объект автосалон (Showroom):

публичные методы:
- добавить машину (addCar) - (трактор (Tractor), легковой автомобиль (Car), грузовой автомобиль (Truck)).
Данный метод должен принимать любой объект из перечисленных ( Tractor,Car,Truck) реализованные от интерфейса (CarInterface).

Создать интерфейс CarInterface:

сигнатуры методов:
- завести машину (onEngine)
- заглушить машину (offEngine)
- конструктор (__construct) - данная сигнатура конструктора не простая, метод конструктора принимает любой объект
двигателя - который реализовал интерфейс EngineInterface.

Создать интерфейс EngineInterface - (интерфейс с реализацией двигателя):
сигнатуры методов:
- завести двигатель (on)
- заглушить двигатель (off)

2 часть
Теперь когда инструменты готовы (интерфейсы CarInterface, EngineInterface) и класс автосалона тоже готов ( Showroom).
Нам надо
- создать пару классов и объектов двигателей примеры в видеоуроке в котором кидал (вы же смотрели?)) -
например SuperEngine, StadartEngine и т.д.
- создайте классы и объекты Машин (Tractor, Car, Truck).
- установите в каждую машинку разные двигатели.*/

interface EngineInterface{
    public function on();
    public function off();
    public function showName();
}

class SuperEngine implements EngineInterface{

    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function on(){
        echo "Супер двигатель запущен";
    }

    public function off(){
        echo "Супер двигатель остановлен";
    }

    public function showName(){
        return $this->name;
    }
}

class StandartEngine implements EngineInterface{

    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function on(){
        echo "Стандартный двигатель запущен";
    }

    public function off(){
        echo "Стандартный двигатель остановлен";
    }

    public function showName(){
        return $this->name;
    }
}

interface CarInterface{

    public function showCarAllInfo();
    public function onEngine();
    public function offEngine();
}

class Truck implements CarInterface{

    private $name;
    private $machineLoadCapacity;//грузоподъемность
    private $engine;

    public function __construct($name, $machineLoadCapacity, EngineInterface $engine){
        $this->name = $name;
        $this->machineLoadCapacity = $machineLoadCapacity;
        $this->engine = $engine;
    }

    public function onEngine(){
        $this->engine->on();
    }

    public function offEngine(){
        $this->engine->off();
    }

    public function showName(){
        return $this->name;
    }

    public function showMachineLoadCapacity(){
        return $this->machineLoadCapacity;
    }

    public function showNameEngine(){
        return $this->engine->showName();
    }

    public function showCarAllInfo(){
        echo "Грузовая машина " . $this->showName() . ' грузоподъемностью ' . $this->showMachineLoadCapacity()
            . ' и двигателем ' . $this->showNameEngine() . '.<br>';
    }
}

class Car implements CarInterface{

    private $name;
    private $year;
    private $color;
    private $engine;

    public function __construct($name, $year, $color, EngineInterface $engine){
        $this->name     = $name;
        $this->year     = $year;
        $this->color    = $color;
        $this->engine   = $engine;
    }

    public function showName(){
        return $this->name;
    }

    public function showYear(){
        return $this->year;
    }

    public function showColor(){
        return $this->color;
    }

    public function showNameEngine(){
        return $this->engine->showName();
    }

    public function onEngine(){
        return $this->engine->on();
    }

    public function offEngine(){
        return $this->engine->off();
    }

    public function showCarAllInfo(){
        echo "Автомобиль " . $this->showName() . ', год выпуска ' . $this->showYear() . ', цвет '
            . $this->showColor() . ', с двигателем ' . $this->showNameEngine() . '.<br>';
    }
}

class Tractor implements CarInterface{

    private $name;
    private $power;
    private $engine;

    public function __construct($name, $power, EngineInterface $engine){
        $this->name     = $name;
        $this->power    = $power;
        $this->engine   = $engine;
    }

    public function onEngine(){
        return $this->engine->on();
    }

    public function offEngine(){
        return $this->engine->off();
    }

    public function showName(){
        return $this->name;
    }

    public function showPower(){
        return $this->power;
    }

    public function showNameEngine(){
        return $this->engine->showName();
    }

    public function showCarAllInfo(){
        echo "Трактор " . $this->showName() . ', с мощностью ' . $this->showPower() . ' и двигателем '
            . $this->showNameEngine() . '.' . '.<br>';
    }
}

class Showroom{

    private $transports = [];

    public function addCar(CarInterface $transport){
        $this->transports[] = $transport;
    }

    public function showCarInfo(){

        echo "В салоне следующий транспорт: " . "<br>";

        foreach ($this->transports as $transport)
            $transport->showCarAllInfo();
    }
}

$superEngine = new SuperEngine('SuperEngine');
$standartEngine = new StandartEngine('StandartEngine');

$mersedes = new Car('Mersedes', '2019', 'green', $superEngine);
$bmw = new Car('BMW', '2020', 'yellow', $standartEngine);
$belarus = new Tractor('BELARUS', 60, $superEngine);
$kam = new Truck('КамАЗ', '44 тонны', $superEngine);

$showroom = new Showroom();
$showroom->addCar($mersedes);
$showroom->addCar($bmw);
$showroom->addCar($belarus);
$showroom->addCar($kam);
$showroom->showCarInfo();