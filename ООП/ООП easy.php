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
    class Pet{
        private $name;
        private $type;
        private $color;
        private $sex;
        private $size;
        public function __construct($name,$type,$color,$sex,$size)
        {
            $this->name=$name;
            $this->type=$type;
            $this->color=$color;
            $this->sex=$sex;
            $this->size=$size;
        }
        public function roar(){
            echo "Name: ".$this->name."<br>";
            echo "Type: ".$this->type."<br>";
            if($this->type === "собака"):
                echo "Roar: gav gav <br>";
            elseif ($this->type === "кот"):
                echo "Roar: meow meow <br>";
            else: echo "You have a strange pet, do not know what sound he has <br>";
            endif;
            echo "Color: ".$this->color."<br>";
            echo "Sex: ".$this->sex."<br>";
            echo "Size: ".$this->size."<br>";
        }
    }
    $pet = new Pet("Цезарь","кот","red","fimale","big");
    $pet->roar();