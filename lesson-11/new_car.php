<?php
echo "УСЛОВИЕ: <br> 1. Описать класс машины и создать объект на его основе
приватные поля:
- имя машины
- двигатель
публичные методы:
-движение на 1 километр (при этом сжигается 1 литр бензина в объекте двигатель) - в случаи успеха выводит сообщение на экран с помощью echo Вы проехали 1 км
	также предусмотреть сообщение с помощью функции echo Бензин закончился пополните пожалуйста бак - в случаи того если бензобак пустой <br>

2. Сделать класс двигателя и на его основе создать объект двигателя
привытные поля:
- бензобак (число) - содержит бензин
публичные методы:
-сжеть один литр бензина из бензобака
-получить количство бензина в бензобаке
-пололнить бензин
конструктор
-заливает бензин на заводе (5 литров) - это как правило для тестдрайва при покупке машины<br>
--Проехать пока бензин не закончиться, затем залить 2 литра и проехать еще 2 километра.<br><br>";
class Car
{
    private $name;
    private $engine;
    public function __construct($name, $engine){
        $this->name=$name;
        $this->engine=$engine;
    }
    public function move() {
        if ($this->engine->getoil() > 0) {
            echo "У вас {$this->engine->getoil()} л<br>";
            echo "Вы проехали 1 км - ";
            $this->engine->burnoil();
            echo "Остаток топлива {$this->engine->getoil()} л<br><br>";
    }   else {
            echo "Бензин закончился - пополните бак<br>";
            $this->engine->addOil();
        } }
}

class Engine {
    private $oil;
    public function __construct($oil)
    {
        $this->oil=$oil;
    }
    public function burnOil() {
        $this->oil = $this->oil - 1;
        return $this->oil;
    }
    public function getOil(){
        return $this->oil;
    }
    public function addOil(){
        echo "<br>Вы пополнили бак на 2 литра<br><br>";
        return $this->oil = $this->oil + 2;
    }
}
$car=new Car("OPEL", new Engine(5));
$car->move();
$car->move();
$car->move();
$car->move();
$car->move();
$car->move();
$car->move();
$car->move();












