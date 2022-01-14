<?php
//Задача #1 - ООП
//Создать объект - Здание, объект будет содержать следующие свойства:
//Название (string)
//Спецификация (string) (жилой дом, административное здание, социальное здание)
//Налоговая ставка (int) - в процентах - обычная переменная которая хранит число
// (далее оно будет необходима для рассчета налога на данный объект недвижимости)
//МЕТОД (calc) - который нам вернет итоговую сумму налога (которая высчитывается из
// сумму дохода владельца данного объекта недвижимости) - т.е. простыми словами берете доход который храниться
// в свойстве Владелец (object)->доход, допустим он 400 руб, далее умножаете его на Налоговая ставка (int) и делите на 100.
//Владелец (object) - это отдельный объект который содержит:
//Имя (string)
//Доход (int)

class Build{
    private string $name;
    private string $specification;
    private int $nalogStavka;
    private $owner;

    public function __construct($name,$nalogStavka,$specification,Owner $owner)
    {
        $this->name=$name;
        $this->nalogStavka=$nalogStavka;
        $this->specification=$specification;
        $this->owner=$owner;
    }

    public function Nalog(){
        echo $this->owner->getIncome()*$this->nalogStavka/100;
    }
    public function getParameters(){
        echo "name: ".$this->name.", spetification: ".$this->specification.", nalogStavka: ".$this->nalogStavka."<br>";
    }

}
class Owner{
    private string $name;
    private int $income;
    public function __construct($name,$income)
    {
        $this->name=$name;
        $this->income=$income;
    }
    public function getIncome(){
        return $this->income;
    }
    public function getParameters(){
        echo "name: ".$this->name.", income: ".$this->income."<br>";
    }
}

$owner = new Owner("Ilya",500);
$owner->getParameters();
$build = new Build("TeachMeSkills",10,"SocialHouse",$owner);
$build->getParameters();
$build->Nalog();



