<?php
interface TransportInterface{
    public function TransportOn();
    public function TransportOff();
}
interface EngineInterface{
    public function engineOn();
    public function engineOff();
}
class ShowRoom{
    private array $shop=[];
    private string $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function addTransport(TransportInterface $transport){
        array_push($this->shop,$transport);
    }
    public function show(){
        foreach ($this->shop as $index){
            var_dump($index);
            echo "<br>";
        }
    }
}
abstract class Transport implements TransportInterface {
    protected string $brand;
    protected $engine;
    public function __construct($brand,EngineInterface $engine)
    {
        $this->brand=$brand;
        $this->engine=$engine;
    }
    abstract public function action();
}
abstract class Engine implements EngineInterface{
    protected string $name;
    protected int $power;
    public function __construct($name,$power)
    {
        $this->name=$name;
        $this->power=$power;
    }
    abstract public function showStatment();
}
class Bus extends Transport {
    private int $amountOfPassangers;
    public function __construct($brand, EngineInterface $engine,$amountOfPassangers)
    {
        parent::__construct($brand, $engine);
        $this->amountOfPassangers=$amountOfPassangers;
    }
    public function TransportOn()
    {
        $this->engine->engineOn();
    }
    public function TransportOff()
    {
        $this->engine->engineOff();
    }
    public function action(){
        $this->amountOfPassangers>0?$this->takePassanger():$this->takeOffPassanger();
    }
    private function takePassanger(){
       echo "bus take some passengers <br>";
    }
    private function takeOffPassanger(){
        echo "bus take off some passengers <br>";
    }
}
class BusEngine extends Engine{
    public function __construct($name, $power)
    {
        parent::__construct($name, $power);
    }
    public function show()
    {
        //something....
    }
    public function engineOn()
    {
        echo "engine on by key";
    }
    public function engineOff()
    {
        echo "engine off by key";
    }
    public function showStatment()
    {
        //some statment....
    }
}
class TruckEngine extends Engine{
    public function __construct($name, $power)
    {
        parent::__construct($name, $power);
    }
    public function show()
    {
        //something....
    }
    public function engineOn()
    {
        echo "engine on by touch";
    }
    public function engineOff()
    {
        echo "engine off by touch";
    }
    public function showStatment()
    {
        //some statment....
    }
}
class Truck extends Transport {
    private int $tonns;
    public function __construct($brand, EngineInterface $engine,$tonns)
    {
        parent::__construct($brand, $engine);
        $this->tonns=$tonns;
    }
    public function TransportOn()
    {
        $this->engine->engineOn();
    }
    public function TransportOff()
    {
        $this->engine->engineOff();
    }
    public function action(){
        $this->tonns>0?$this->takeTonns():$this->takeOffTonns();
    }
    private function TakeTonns(){ //загрузить
        echo "truck take some tonns <br>";
    }
    private function takeOffTonns(){ //выгрузить
        echo "truck take off some tonns <br>";
    }
}

$showroom=new ShowRoom("Shop");

$bus = new Bus("BMW",new BusEngine("Pro-100",1000),10);
$bus->action();
$showroom->addTransport($bus);

$truck = new Truck("Belarus",new BusEngine("Bel24",2000),100);
$truck->action();
$showroom->addTransport($truck);


$showroom->show();


