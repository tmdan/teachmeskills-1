<?php
    class Building{
      private string $Name;
      private string $Type;
      private int $Tax;
      private  Owner $Owner;

      public function __construct($Name, $Type, $Tax){
        $this->Name=$Name;
        $this->Type=$Type;
        $this->Tax=$Tax;
      }

      public function getName(){
          return $this->Name;
      }

      public function getType(){
          return $this->Type;
      }

      public function getTax(){
            return $this->Tax;
      }

        public function setTax(int $Tax){
            $this->Tax = $Tax;
        }

      public function calcTax(){
          return $this->Owner->getIncome()*$this->Tax/100;
      }

      public function getOwner(){
        return $this->Owner;
      }

      public function setOwner($Owner){
          $this->Owner = $Owner;
    }

}

class Owner{
    private string $Name;
    private int $Income;

    public function __construct($name, $income){
        $this->Name=$name;
        $this->Income=$income;
    }

    public function getName(){
        return $this->Name;
    }

    public function getIncome(){
        return $this->Income;
    }

}

$Owner= new Owner('Василий Пупкин', 505);
$Mall = new Building('DANA-MALL', 'Торговый центр', 20);
$Mall->setOwner($Owner);
echo $Mall->calcTax();