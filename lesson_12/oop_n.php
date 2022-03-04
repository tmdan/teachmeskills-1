<?php
class Mother {
    private Work $work;
    public function __construct($work){
        $this->work = $work;
    }
    protected function getSalery(){
        return $this->work->getZp();
    }
}
class Work{
    private $zp;
    private $podNal;
    private $socNal;
    public function __construct($zp, $podNal, $socNal){
        $this->zp = $zp;
        $this->podNal = $podNal;
        $this->socNal = $socNal;
    }
    public function getZp()
    {
        $zp = $this->zp;
        $podNal = $this->podNal;
        $socNal = $this->socNal;
        return $zp - ($zp * ($podNal / 100)) - ($zp * ($socNal / 100));
    }
}
class Student {
    private $name;
    private Univer $univer;
    public function getSalery()
    {
        $motherZp = 
    }
    private getStipen(){

}
}
class Univer {
    private $name;
    private Predmet $predmets = [];
}
class Predmet{
    private $name;
    private $ball;
}