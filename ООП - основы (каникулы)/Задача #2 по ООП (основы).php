<?php
//Возьмите предыдущий пример который делали на занятии и добавьте функционал разгона на машине:
//т.е.:
//
//добавьте метод speedUp($arg) - который принимает аргумент $arg скорости - т.е. на сколько надо
//увеличить скорость машины (скорость увеличенное на 5 ед. удваивает использование бензина)
//добавьте метод speedDown($arg) - который принимает аргумент $arg скорости - т.е. на сколько
//надо уменьшить скорость машины (скорость уменьшенное на 5 ед. уменьшает вдвое использование бензина)
//PS>если скорость упала до 0 или бензин закончился в баке - предусмотрите вывод сообщения "Машина Заглохла"

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
    public function speedUp($speedUp){
        $speedUp===5?$this->engine->burnLitters(2):true;
    }
    public function speedDown($speedDown){
        $speedDown===5?$this->engine->burnLitters(1):true;
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
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function burnLitters($burnLitersFuel){
        $this->burnLitersFuel=$burnLitersFuel;
    }
    public function burnLitersFuel(){
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
       return $this->startLitersFuel-=$engine->burnLitersFuel();
    }
    public function showParameters(){
        echo "<i>Tank voluem:</i> ".$this->voluem." liters, <i>startFuel:</i> ".$this->startLitersFuel." liters<br><br>";
    }
}
$engine = new  Engine("SuperEngine");
$engine->burnLitters(1);
$car = new Car("Mersedes",$engine,new Tank(10,0));
$car->showParameters();
$car->refuelTank(10);
$car->showParameters();
$car->move();
$car->showParameters();
$car->speedUp(5);
$car->move();
$car->showParameters();
$car->move();
$car->showParameters();
$car->speedDown(5);
$car->move();
$car->showParameters();
$car->move();
$car->showParameters();



