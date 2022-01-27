<?php
class Bilding  {
    public $nameBilding;
    public $specification;
    public $taxRate;
    public $owner;

    public function __construct (string $nameBilding, string $specification, int $taxRate, $owner){
    $this->nameBilding = $nameBilding;
    $this->specification = $specification;
    $this->taxRate = $taxRate;
    $this->owner = $owner;
    }

     public  function calc (){
        echo 'Итоговая сумма налога: ' . $this->owner->getIncome() * $this->taxRate / 100 ;
    }
}
 class Owner  {
    public $nameOwner;
    public $income;

    public function __construct (string $nameOwner, int $income){
        $this->nameOwner = $nameOwner;
        $this->income = $income;
    }
    public function getIncome () {
        return $this->income;
    }
 }

$bilding = new Bilding('Маяк', 'социальное здание', 10, new Owner('Морячок', 1500));
$bilding->calc();




