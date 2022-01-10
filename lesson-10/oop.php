<?php

class Cat
{
    private $name;
    private $color;
    private $weight;
    private $age;

    public function __construct(string $name, string $color, float $weight, int $age)
    {
        $this->color = $color;
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function sayHello()
    {
        echo 'Мяу! Меня зовут ' . $this->name . ', мой цвет ' . $this->color . ', вес ' . $this->weight . ' кг и возраст ' . $this->age . ' лет.';
    }
}

$cat1 = new Cat('Снежок', 'белый', 3.2, 5);
$cat1->sayHello();
echo '<br>';
$cat2 = new Cat('Барсик', 'рыжий', 6.3, 6);
$cat2->sayHello();