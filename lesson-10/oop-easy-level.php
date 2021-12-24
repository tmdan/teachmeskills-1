<?php

/*Создать объект домашнего животного: кошка или собака
  Добавить нужные атрибуты: минимум 4 - придумайте сами (наример цвет и так далее)
  Создать в объекте метод golos -> он будет печатать на экран либо "Гав гав" либо "Мяу"
  Вывести на экран атрибуты объекта и запустить метод golos (МЕТОД НАДО ЗАПУСТИТЬ ОБРАЩАЯСЬ К ОБЪЕКТУ)
 используйте метод для вывода сообщения а не простой вывод атрибута объекта на дисплей.*/


class Cat {
   private $name;
   private $age;
   private $breed;
   private $gender;

   public function golos(){
       echo "Myau";
}
   public function getParams(){
      echo  "$this->name" . "<br>" . "$this->age" . "<br>" . "$this->breed" . "<br>" . "$this->gender" . "<br>" ;
    }

    public function __construct($name, $age, $breed, $gender){
       $this->name = $name;
       $this->age = $age;
       $this->breed = $breed;
       $this->gender = $gender;
    }

}

$cat = new Cat('Tishka', "5", "siamese", "male");
$cat->getParams();
$cat->golos();

