<!--Домашнее задание:-->
<!--Создать объект домашнего животного: кошка или собака-->
<!--Добавить нужные атрибуты: минимум 4 - придумайте сами (наример цвет и так далее)-->
<!--Создать в объекте метод golos -> он будет печатать на экран либо "Гав гав" либо "Мяу", кто есть кто и так понятно думаю :)-->
<!--Вывести на экран атрибуты объекта и запустить метод golos (МЕТОД НАДО ЗАПУСТИТЬ ОБРАЩАЯСЬ К ОБЪЕКТУ) используйте метод для вывода сообщения а не простой вывод атрибута объекта на дисплей.-->
<!--Таким образом у вас получиться нечто подобное:-->
<!--Имя: Мурка-->
<!--Голос: "Мяу"-->
<!--итд-->

<?php
class Dog{
    private string $name;
    private string $size;
    private int $age;
    private string $sex;

    public function __construct($name,$size,$age,$sex)
    {
        $this->size=$size;
        $this->age=$age;
        $this->sex=$sex;
        $this->name=$name;
    }

    public function getParameters(){
        echo "name: ".$this->name.", size: ".$this->size.", age: ".$this->age.", sex: "."$this->sex"."<br>";
    }

    public function golos(){
        echo "gove gove";
    }
}

$dog = new Dog("Bobik",24,1,"fimale");
$dog->getParameters();
$dog->golos();