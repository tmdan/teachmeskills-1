<?php
interface CarInterface{
    public function carOn();
    public function carOff();
}
interface EngineInterface{
    public function engineOn();
    public function engineOff();
}
class Car implements CarInterface{
    private string $name;
    private string $color;
    private bool $toggle=false;
    private bool $goIn = false;
    private bool $isBus = false;
    private $engine;
    public function __construct($name,$color,$engine)
    {
        $this->name=$name;
        $this->color=$color;
        $this->engine=$engine;
        $this->setBus();
    }
    public function carOn(){$this->toggle = true;}
    public function carOff(){$this->toggle = false;}
    public function getCarOn(){return $this->toggle;}
    public function getCarOff(){return $this->toggle;}
    public function getEngineOn(){return $this->engine->getEngineOn();}
    public function getEngineOff(){return $this->engine->getEngineOff();}
    private function check(){
        if($this->name==="Bus"){
            return true;
        }else return false;
    }
    private function setBus(){if($this->check()) $this->isBus=true;}
    private function getBus(){return $this->isBus;}
    public function letPeopleGoIn(){if($this->getBus()) $this->goIn=true;}
    public function dontLetPeopleGoIn(){if(!$this->getBus()) $this->goIn=false;}
    public function showBus(){
        if($this->goIn){
            echo "There is a BUS. People can go in to go Minsk <br>";
        }
    }
}
class Engine implements EngineInterface{
    private string $brand;
    private bool $toggle=false;
    public function __construct($brand,$power){
        $this->brand=$brand;
        $this->power=$power;
    }
    public function engineOn(){$this->toggle = true;}
    public function engineOff(){$this->toggle = false;}
    public function getEngineOn(){return $this->toggle;}
    public function getEngineOff(){return $this->toggle;}
}
class AutoRoom{
    private string $name;
    private array $places=[];
    private $car;
    public function __construct($name){$this->name=$name;}
    public function addCar($car){
        if($this->checkCar($car))
            array_push($this->places,$car);
    }
    private function checkCar($car){
        if($car->getCarOn() and $car->getEngineOn()){
            return true;
        }else return false;
    }
    public function showCars(){
        foreach ($this->places as $car){
            var_dump($car);
            echo "<br>";
        }
    }
}
$engine = new Engine("Logen",200);
$engine->engineOn();
$car = new Car("Truck","red",$engine);
$car->carOn();


$engine1 = new Engine("Inshe2",300);
$engine1->engineOn();
$car1 = new Car("Car","pink",$engine);
$car1->carOn();

$engine2 = new Engine("Inshe",100);
$engine2->engineOn();
$car2 = new Car("Bus","blue",$engine);
$car2->carOn();

$autoRoom = new AutoRoom("IlyaHouse");

$autoRoom->addCar($car);
$autoRoom->addCar($car1);
$autoRoom->addCar($car2);
$autoRoom->showCars();;

$car2->LetPeopleGoIn();
$car2->showBus();