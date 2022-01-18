<?php
//Создать объект СТРАНА (Country)
//Приватные свойства:
//- Название (name)
//- Население (population) (массив из объектов ЧЕЛОВЕК)
//
//Публичные методы:
//- Получить количество населения (getPopulation)
//- Получить средний возраст населения (getAverageAge)
//
//Создать объект ЧЕЛОВЕК (Human)
//Приватные свойства:
//- Имя (name)
//- Возраст (age)
//
//Публичные методы:
//- Установить имя (из массива рандомно)
//- Установить возраст (рандомно)
//
//Приватные методы проверки имени и возраста:
//- checkName() предусмотреть проверку в приватном методе человека установку имени только строки - использовать в сеттере имени данный приватные метод проверки
//- checkAge() предусмотреть проверку в приватном методе человека возраста от 1 года до 110 лет (проверка на число и значения в диапазоне) - использовать в сеттере возраста данный приватный метод проверки*
//
//Создать минимум 6 человек. и реализовать выше описанную логику в классах

class Country{
    private string $name;
    private array $population=[];
    private int $averageAge=0;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function addHuman(Human $human){
        array_push($this->population,$human);
    }
    public function averageAge(){
        for($i=0;$i<count($this->population);$i++){
            $this->averageAge+=$this->population[$i]->getAge();
        }
        return $this->averageAge/count($this->population);
    }
    public function show(){
        echo "Amount of human in country: ".count($this->population)."<br>";
        echo "Average age: ".$this->averageAge."<br>";
    }
}
class Human{
    private string $name;
    private int $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function getAge(){
        return $this->age;
    }
    public function checkAge(){
        if($this->age<18 or $this->age>100):
            die("It is not a correctly age");
        else:$this->getAge();
        endif;
    }
}
$human_1 = new Human("Ilya",18);
$human_1->checkAge();
$human_2 = new Human("Kate",20);
$human_2->checkAge();

$country = new Country("Belarus");
$country->addHuman($human_1);
$country->addHuman($human_2);

$country->averageAge();
$country->show();


