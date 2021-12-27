<?php

class Car
{
    private $namecar;
    private $engine;
    public function __construct($namecar, $engine){
        $this->namecar=$namecar;
        $this->engine=$engine;
    }
    public function move()
    {
        echo "Вы проехали 1км";
    }
}

class Engine{
    private $oil;
    public function __construct($oil)
    {
        $this->oil=$oil;
    }
    public function burnOil() {
        $this->oil--;
    }
    public function getOil(){
        return $this->oil;
    }}
$car=new Car("OPEL", new Engine(5));
$car->move();










