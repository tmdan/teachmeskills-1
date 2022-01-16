<?php
//
//Предыдущий (уже должны быть сделали ранее):
//
//Сделать объект машины
//приватные поля:
//
//имя машины
//двигатель
//публичные методы:
//
//движение на 1 километр (при этом сжигается 1 литр бензина в объекте двигатель) -
// в случаи успеха выводит сообщение на экран с помощью echo "Вы проехали 1 км",
// также предусмотреть сообщение с помощью функции echo "Бензин закончился пополните пожалуйста бак"
// - в случаи того если бензобак пустой
//Сделать объект двигателя
//привытные поля:
//
//бензобак (число) - содержит бензин
//публичные методы:
//сжеть один литр бензина из бензобака
//получить количство бензина в бензобаке
//пололнить бензин
//конструктор
//заливает бензин на заводе (5 литров) - это как правило для тестдрайва при покупке машины
//--Проехать пока бензин не закончиться, затем залить 2 литра и проехать еще 2 километра.

class Car{
    private string $brand;
    private $engine;
    private $tank;
    private int $amountKm=0;//количество пройденных км

    public function __construct($brand,Engine $engine,Tank $tank)
    {
        $this->brand=$brand;
        $this->engine=$engine;
        $this->tank=$tank;
    }
    public function refuelTank($countLiters){ //заправка бака
        echo "You refule ".$this->tank->Refuel($countLiters)." liters <br>";
    }
    public function move(){ // количество пройденных км
        $this->amountKm++;
        echo $this->tank->loseLitters($this->engine)===-1?die("Refuel a car!!!"):"You moved".$this->amountKm."km<br>";
    }
    public function showParameters(){
        echo "<i>Car brand</i>: ".$this->brand.", <i>amount km is moved</i>: ".$this->amountKm." km<br>";
        $this->engine->showParameters();
        $this->tank->showParameters();
    }
}
class Engine{
    private string $name;
    private int $burnLitersFuel; //расход на 1 км

    public function __construct($name,$burnLitersFuel)
    {
        $this->name=$name;
        $this->burnLitersFuel=$burnLitersFuel;
    }

    public function getBurnLitersFuel(){
        return $this->burnLitersFuel;
    }
    public function showParameters(){
        echo "<i>Engine name</i>: ".$this->name.", <i>burnLitersFuel</i>: ".$this->burnLitersFuel." <i>liters</i><br>";
    }
}
class Tank{   //бак
    private int $voluem; //обьем, вместимость
    private int $startLitersFuel=0; //начальное количество бензина в баке
    public function __construct($voluem,$startLitersFuel)
    {
        $this->voluem=$voluem;
        $this->startLitersFuel=$startLitersFuel;
    }
    public function Refuel($countLitters){ //заправка
        $this->startLitersFuel+=$countLitters;
        return $this->startLitersFuel>$this->voluem?die("Your TANK is not have so VOLUEM"):$this->startLitersFuel;
    }
    public function loseLitters(Engine $engine){
       return $this->startLitersFuel-=$engine->getBurnLitersFuel();
    }
    public function showParameters(){
        echo "<i>Tank voluem:</i> ".$this->voluem." liters, <i>startFuel:</i> ".$this->startLitersFuel." liters<br><br>";
    }
}
$car = new Car("Mersedes",new  Engine("SuperEngine",1),new Tank(5,0));
$car->showParameters();
$car->refuelTank(3);
$car->showParameters();
$car->move();
$car->showParameters();
$car->move();
$car->showParameters();
$car->move();
$car->showParameters();
$car->move();
$car->showParameters();




