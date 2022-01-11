<?php
/*Создать объект СТРАНА (Country)
Приватные свойства:
- Название (name)
- Население (population) (массив из объектов ЧЕЛОВЕК)

Публичные методы:
- Получить количество населения (getPopulation)
- Получить средний возраст населения (getAverageAge)
-------------------------------------------------------
Создать объект ЧЕЛОВЕК (Human)
Приватные свойства:
- Имя (name)
- Возраст (age)

Публичные методы:
- Установить имя (из массива)
- Установить возраст (рандомно)

PS>
Приватные методы проверки имени и возраста:
- checkName() предусмотреть проверку в приватном методе человека установку имени только строки
- использовать в сеттере имени данный приватные метод проверки
- checkAge() предусмотреть проверку в приватном методе человека возраста от 1 года до 110 лет
(проверка на число и значения в диапазоне) - использовать в сеттере возраста данный приватный метод проверки*/

class Country{
    private $name;
    private $population = [];

    public function __construct($name, $population){
        $this->name = $name;
        $this->population = $population;
    }

    public function getPopulation(){
        return count($this->population);
    }

    public function getAverageAge(){
        $sum = 0;
        $arr_pop = $this->population;

        foreach ($arr_pop as $elem){
            $sum += $elem->getAge();
        }

        return $sum/$this->getPopulation();
    }

    public function getName(){
        return $this->name;
}
}

class Human{
    private $name;
    private $age;

    function __construct($name){
        $this->setAge();
        $this->setName($name);
    }

    public function checkName($name){
        if (!is_string($name)){
            echo "Введите корректное значение имени!";
            return false;
        }
        else return true;
    }

    public function setName($arrName){
        $name = $arrName[array_rand($arrName,1)];

        if ($this->checkName($name)){
            $this->name = $name;
        }
    }

    public function getName(){
        return $this->name;
    }

    public function checkAge($age){
        if (($age<=0 || $age>110) || (!is_int($age))){
            return false;
        } else {
            return true;
        }
    }

    public function setAge(){
        $age = rand(0 , 200);
        if ( $this->checkAge($age) ){
            $this->age = $age;
        } else
        {
            $this->setAge();
        }
     }

    public function getAge(){
        return $this->age;
    }
}

$arrName = ['Ivan', 'Alex', 'Dima', 'Ira', 'Alla', 'Marina'];

$human1 = new Human($arrName);
echo  "Имя " . $human1->getName() . '<br>';
echo "Возраст " . $human1->getAge() . '<br>';

$human2 = new Human($arrName);
echo "Имя " . $human2->getName() . '<br>';
echo "Возраст " . $human2->getAge() . '<br>';

$human3 = new Human($arrName);
echo "Имя " . $human3->getName() . '<br>';
echo "Возраст " . $human3->getAge() . '<br>';

$human4 = new Human($arrName);
echo  "Имя " . $human4->getName() . '<br>';
echo "Возраст " . $human4->getAge() . '<br>';

$human5 = new Human($arrName);
echo "Имя " . $human5->getName() . '<br>';
echo "Возраст " . $human5->getAge() . '<br>';

$human6 = new Human($arrName);
echo "Имя " . $human6->getName() . '<br>';
echo "Возраст " . $human6->getAge() . '<br>';

$arrHumans = [];
$arrHumans[] = $human1;
$arrHumans[] = $human2;
$arrHumans[] = $human3;
$arrHumans[] = $human4;
$arrHumans[] = $human5;
$arrHumans[] = $human6;

$Belarus = new Country('Belarus', $arrHumans);
echo "Количество популяции в " . $Belarus->getName() . " " . $Belarus->getPopulation() . "<br>";
echo "Средний возраст жителей " . $Belarus->getAverageAge();
echo "<br>";
