<?php
/*Возьмите предыдущий пример который делали на занятии и добавьте функционал разгона на машине:
т.е.:

добавьте метод speedUp($arg) - который принимает аргумент $arg скорости - т.е. на сколько надо увеличить скорость машины
(скорость увеличенное на 5 ед. удваивает использование бензина)
добавьте метод speedDown($arg) - который принимает аргумент $arg скорости - т.е. на сколько надо уменьшить скорость машины
(скорость уменьшенное на 5 ед. уменьшает вдвое использование бензина)
PS>если скорость упала до 0 или бензин закончился в баке - предусмотрите вывод сообщения "Машина Заглохла"*/


class Car
{
    private $namecar;
    private $engine;
    private $speed; // скорость
    private $ratePetrol; //расход топлива

    public function __construct(Engine $engine, $namecar, $speed, $ratePetrol)
    {
        $this->namecar      = $namecar;
        $this->engine       = $engine;
        $this->speed        = $speed;
        $this->ratePetrol   = $ratePetrol;
    }

    public function getNamecar()
    {
        return $this->namecar;
    }

    // Движение авто
    public function move()
    {
        if ($this->engine->getPetrol() > 0) {
            if ($this->engine->getPetrol() - $this->ratePetrol>=0){
                $this->engine->burnGasoline($this->ratePetrol);
                echo 'Вы проехали 1 км, осталось  ' . $this->engine->getPetrol() . " л" . "<br>";
            } else{
                $a = $this->ratePetrol - $this->engine->getPetrol();
                echo "Бензин заканчивается. Для того, чтобы проехать 1 км не хватает " . $a .  " л. <br>";
            }
        } else {
            echo "Бензин закончился пополните пожалуйста бак" . "<br>";
        }
    }

    //Выводим на спидометре информацию о текущем запасе масла
    public function getOldInfo()
    {
        //Обращаемся к датчику который установлен в двигателе и получаем информацию о количестве масла в двигателе
        return $this->engine->getPetrol();
    }

    // заправка машины
    public function setPetrol($petrol)
    {
        $this->engine->setPetrol($petrol);
    }

    // увеличение скорости (скорость увеличенное на 5 ед. удваивает использование бензина)
    public function speedUp($arg){
        $this->speed += $arg;

        // Если машина только тронулась, то просто установлю расход 1 л на 1 км (сама придумала)
        if ($this->ratePetrol===0){
            $this->ratePetrol = 1;

        // каждые 5 км/ч скорости увеличивают расход топлива вдвое
        // чтобы узнать, какой сейчас будет расход топлива, надо текущее значение топлива умножить
        // на 2 в степени что-ли????? пока пусть будет так
        }else{
            $this->ratePetrol *= 2** intdiv($arg, 5);
        }
    }

    // уменьшение скорости
    public function speedDown($arg){

        if (($this->getSpeed()-$arg) <= 0){
            echo "Вы заглохли!!!";
        }else {
            $this->speed -= $arg;

            $this->ratePetrol = intdiv($this->ratePetrol, 2** intdiv($arg, 5));
        }
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getRatePetrol(){
        return $this->ratePetrol;
    }
}

class Engine
{
    private $petrol; // бензин

    public function __construct($petrol)
    {
        $this->petrol = $petrol;
    }

    //Пополнить бензин
    public function setPetrol($petrol)
    {
        $this->petrol += $petrol;
    }

    // сжеть n-литров бензина из бензобака
    public function burnGasoline($arg)
    {
        $this->petrol -= $arg;
    }

    public function getPetrol()
    {
        return $this->petrol;
    }
}

$engine = new Engine("5");

$car = new Car($engine, 'bmw', 0, 0);

$car->speedUp(5);
echo "У вас " . $car->getOldInfo() . ' л. бензина' . '<br>' ;


$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();


echo "Заправим на 2 л" . '<br>';
$car->setPetrol("2");
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

echo "Заправим на 40 л" . '<br>';
$car->setPetrol("40");
$car->speedUp(24);
echo "Увеличили скорость на 24 км/ч. Новая скорость " . $car->getSpeed() . ' км/ч<br>';


$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();

echo "Снизим скорость на 6 км/ч" . '<br>';
$car->speedDown(6);

$car->move();
$car->getOldInfo();

$car->move();
$car->getOldInfo();