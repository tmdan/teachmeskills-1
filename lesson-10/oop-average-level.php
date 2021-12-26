<?php
/*Создать объект - Здание, объект будет содержать следующие свойства:
Название (string)
Спецификация (string) (жилой дом, административное здание, социальное здание)
Налоговая ставка (int) - в процентах - обычная переменная которая хранит число
(далее оно будет необходима для рассчета налога на данный объект недвижимости)
МЕТОД (calc) - который нам вернет итоговую сумму налога
(которая высчитывается из сумму дохода владельца данного объекта недвижимости) -
т.е. простыми словами берете доход который храниться в свойстве Владелец (object)->доход, допустим он 400 руб,
далее умножаете его на Налоговая ставка (int) и делите на 100.
Владелец (object) - это отдельный объект который содержит:

Владелец

Имя (string)
Доход (int)*/

class Building {
    private $name;
    private $specification;
    private $tax_rate;
    private $owner;
    public function calc(){
        return $this->owner->getIncome()*$this->tax_rate/100;
    }

    public function __construct($name, $specification, $tax_rate, Owner $owner){
        $this->name = $name;
        $this->specification = $specification;
        $this->tax_rate = $tax_rate;
        $this->owner = $owner;
    }

    public function getName(){
        return $this->name;
    }

    public function getSpecification(){
        return $this->specification;
    }

    public function getTaxRate(){
        return $this->tax_rate;
    }

    public function getOwnerName(){
        return $this->owner->getName();
    }
}

class Owner{
    private  $name;
    private $income;

    public function __construct($name, $income){
        $this->name = $name;
        $this->income = $income;
    }

    public function getIncome(){
        return $this->income;
    }

    public function getName(){
        return $this->name;
    }

}

$building = new Building("школа" , "соц здание", 20 , new Owner("Ленинский р-н", 100000));

echo "Итоговая сумма налога для " . $building->getOwnerName() . " равняется " . $building->calc() ;