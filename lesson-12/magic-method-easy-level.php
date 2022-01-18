<?php
/*создайте любой объект
внедрите в ваш класс 4 любых магических метода
покажите реальные примеры использование данных магических методов*/

class Human{
    private $name;
    private $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }

    public function __get($property){
        return $this->$property;
    }

    public function __toString()
    {
        return $this->name . ', ' . $this->age .  '<br>';
    }

    public function __invoke()
    {
        echo 'Объект вызывается в качестве функции' .  '<br>';
    }
}

$Ivan = new Human('Ivan', 22);
echo "Был объект " . $Ivan->getName() . ", " . $Ivan->getAge() .  '<br>';

$Ivan->surname = 'Ivanov';
$Ivan->age = 25;
echo "После изменений стал " . $Ivan->getName() . ' ' . $Ivan->surname . ', ' . $Ivan->age .  '<br>';

echo 'Обратимся к объекту как к строковому типу: ' . $Ivan;
$Ivan();