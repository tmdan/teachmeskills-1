<?php
class Car {
    private $nameCar;
    private $engine;

    public function __construct( string $nameCar, $engine){
        $this->nameCar = $nameCar;
        $this->engine = $engine;
    }
    public function go(){
        if($this->engine->burnGasolina()>0){
            echo 'Вы проехали 1 км на машине '. $this->nameCar. '</br>';
            echo 'Количество бензина в бензобаке '. $this->engine->gasolina(). '</br>';
        }else{
            echo 'Бензин закончился пополните пожалуйста бак'. '</br>';
            echo 'Бензобак поплнен '. $this->engine->addGasolina(). '</br>';
        }
    }
    public function carGasolina($gasgas){
        return $this->engine->gasTank = $gasgas;
    }
}
class Engine {
    private $gasTank;
        public function __construct(int $gasTank){
            $this->gasTank = $gasTank;
        }
    public function burnGasolina(){
        return $this->gasTank=$this->gasTank-1;
    }
    public function gasolina(){
        return $this->gasTank;
    }
    public function addGasolina(){
        $this->gasTank=$this->gasTank+2;
    }
}
$car = new Car('bmw', new Engine(5));
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();
$car->go();