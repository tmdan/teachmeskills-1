<?php
/* 1 часть:
Создать объект автосалон (Showroom):

публичные методы:
- добавить машину (addCar) - (трактор (Tractor), легковой автомобиль (Car), грузовой автомобиль (Truck)). Данный метод должен принимать любой объект из перечисленных ( Tractor,Car,Truck) реализованные от интерфейса (CarInterface).

Создать интерфейс CarInterface:

сигнатуры методов:
- завести машину (onEngine)
- заглушить машину (offEngine)
- конструктор (__construct) - данная сигнатура конструктора не простая, метод конструктора принимает любой объект двигателя - который реализовал интерфейс EngineInterface.

Создать интерфейс EngineInterface - (интерфейс с реализацией двигателя):
сигнатуры методов:
- завести двигатель (on)
- заглушить двигатель (off)

2 часть
Теперь когда инструменты готовы (интерфейсы CarInterface, EngineInterface) и класс автосалона тоже готов ( Showroom). Нам надо
- создать пару классов и объектов двигателей примеры в видеоуроке в котором кидал (вы же смотрели?)) - например SuperEngine, StadartEngine и т.д.
- создайте классы и объекты Машин (Tractor, Car, Truck).
- установите в каждую машинку разные двигатели.

и конец киньте машинки в автосалон.
3 часть:
НА ОТЛИЧНИКА - делать не обязательно!
В каждом классе Машинок из набора - (Tractor, Car, Truck). Создайте уникальный для данной машинки либо свойство либо действие. Описание которого нет в CarInterface.
например: в Truck логично добавить функции (загрузить груз, разгрузить груз).*/
//создание классов для будущих объектов
class Showroom{
    private $transport;
    public function __construct(CarInterface $Transport){
        $this->transport=$Transport;
    }
    public function addCar(CarInterface $Transport){
        $this->transport=$Transport;
    }
    public function getTransportInfo(){
        return $this->transport->getName().', '.$this->transport->getEngine().'. '.$this->transport->getColor();
    }
}
interface CarInterface{
    public function startEngine();
    public function stopEngine();
}
interface EngineInterface{
    public function on();
    public function off();
}
abstract class Engine implements EngineInterface{
    protected $name;
    protected $size;
    protected $fuelType;
    public function __construct(string $name, int $size, string $fuelType){
        $this->name=$name;
        $this->size=$size;
        $this->fuelType=$fuelType;
    }
    public function on(){
        return $this->name.' с объёмом '.$this->size.'л. запущен';
    }
    public function off(){
        return $this->name.' с объёмом '.$this->size.'л. остановлен';
    }
    public function getName(){
        return $this->name;
    }
    public function getSize(){
        return $this->size;
    }
    public function getFuelType(){
        return $this->fuelType;
    }
    abstract public function abstractMethod();
}
abstract class Transport implements CarInterface{
    protected $name;
    protected $color;
    protected Engine $engine;
    public function __construct($name, Engine $engine, $color){
        $this->name=$name;
        $this->color=$color;
        $this->engine=$engine;
    }
    abstract public function getUniqueProperty();
    public function startEngine(){
        return 'В транспортном средстве "'.$this->name.'" '.$this->engine->on();
    }
    public function stopEngine(){
        return 'В транспортном средстве "'.$this->name.'" '.$this->engine->off();
    }

    public function getName()
    {
        return "Имя транспортного средства — $this->name";
    }

    public function getColor(){
        return 'Цвет '.$this->name.' — '.$this->color;
    }

    public function getEngine(){
        return $this->engine->getName().' с объёмом '.$this->engine->getSize().'л.';
    }

}
//класс легковых авто
class Car extends Transport {
    private $passengers;//уникальное свойство
    public function getUniqueProperty(){
        if (empty($this->passengers)){
            return 'Уникальное свойство — перевозка пассажиров.';
        } else return 'Уникальное свойство перевозка пассажиров. Колличество пассажиров — '.$this->passengers;
    }
    public function getPassengers(){
        return $this->passengers;
    }
    public function setPassengers($passengers){
        $this->passengers = $passengers;
    }
}
//класс тракторы
class Tractor extends Transport{
    private $plough ;//уникальное свойство
    public function getUniqueProperty(){
        if (empty($this->plough)){
            return 'Уникальное свойство — пахать поле.';
        } else return 'Уникальное свойство пахать поле. Поле для вспахивания — '.$this->plough;
    }
    public function getPlough()
    {
        return $this->plough;
    }
    public function setPlough(string $plough){
        $this->plough = $plough;
    }
}
//класс грузовиков
class Truck extends Transport{
    private $cargo;//уникальное свойство
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo(string $cargo){
        $this->cargo = $cargo;
    }
    public function getUniqueProperty(){
        if (empty($this->cargo)){
            return 'Уникальное свойство — перевозка грузов.';
        } else return 'Уникальное свойство перевозка грузов. Груз для перевозки — '.$this->cargo;
    }
}
//двигатель для легковых авто
class CarEngine extends Engine{
    public function abstractMethod(){
        return "реализация абстрактного метода для $this->name";
    }
}
//двигатель для тракторов
class TractorEngine extends Engine{
    public function abstractMethod(){
        return "реализация абстрактного метода для $this->name";
    }
}
//двигатель для грузовиков
class TruckEngine extends Engine{
    public function abstractMethod(){
        return "реализация абстрактного метода для $this->name";
    }
}

$carMotor = new CarEngine('Двигатель — DW8', 5, 'Benzin');
$tractorMotor = new TractorEngine('Двигатель — DEUTZ-1', 18, 'BIO-Diesel');
$truckMotor = new TruckEngine('Двигатель — MAN-422', 10, 'Diesel');

$bmw= new Car('BMW X888', $carMotor, 'black');
$belarus = new Tractor('Belarus 3522', $tractorMotor, 'red');
$scania = new Truck('Scania s620v8', $truckMotor, 'blue');

// Проверяем)
$showRoom = new Showroom($bmw);
echo $showRoom->getTransportInfo().'<br>';
$showRoom->addCar($belarus);
echo $showRoom->getTransportInfo().'<br>';
$showRoom->addCar($scania);
echo $showRoom->getTransportInfo().'<br>';

//можно установить индивидуальные свойства для каждого типа техники и проверить их, вызвав соответствующие методы)
