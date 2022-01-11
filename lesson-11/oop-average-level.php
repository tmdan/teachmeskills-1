<?php
/*Сделать объект машины
приватные поля:

имя машины
двигатель
публичные методы:

движение на 1 километр (при этом сжигается 1 литр бензина в объекте двигатель) -
в случаи успеха выводит сообщение на экран с помощью echo "Вы проехали 1 км",
также предусмотреть сообщение с помощью функции echo "Бензин закончился пополните пожалуйста бак" -
в случаи того если бензобак пустой

Сделать объект двигателя
привытные поля:

бензобак (число) - содержит бензин
публичные методы:
сжеть один литр бензина из бензобака
получить количство бензина в бензобаке
пололнить бензин
конструктор
заливает бензин на заводе (5 литров) - это как правило для тестдрайва при покупке машины
--Проехать пока бензин не закончиться, затем залить 2 литра и проехать еще 2 километра.*/

    class Car
    {
        private $namecar;
        private $engine;

        public function __construct(Engine $engine, $namecar)
        {
            $this->namecar = $namecar;
            $this->engine = $engine;
        }

        public function getNamecar()
        {
            return $this->namecar;
        }

        // Движение авто
        public function move()
        {
            if ($this->engine->getPetrol()>0){
                $this->engine->burnGasoline();
                echo 'Вы проехали 1 км, осталось  ' . $this->engine->getPetrol() . " л" . "<br>";
            } else {
                echo "Бензин закончился пополните пожалуйста бак" . "<br>";
            }

        }

        //Выводим на спидометре информацию о текущем запасе масла
        public function getOldInfo()
        {
            //Обращаемся к датчику который установлен в двигателе и получаем информацию о количестве масла в двигателе
            return $this->engine->getPetrol();
        }

        public function setPetrol($petrol){
            $this->engine->setPetrol($petrol);
        }

    }

    //Создаем объект двигателя
    class Engine
    {
        private $petrol; // бензин

        public function __construct($petrol)
        {
            $this->petrol=$petrol;
        }

        //Пополнить бензин
        public function setPetrol($petrol)
        {
            $this->petrol = $petrol;
        }

        // сжеть один литр бензина из бензобака
        public function burnGasoline(){
            $this->petrol --;
        }

        public function getPetrol(){

            return $this->petrol;
        }

    }

    $engine = new Engine(5);

    $car = new Car($engine, 'bmw');

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();


    echo "Заправим на 2 л" . '<br>';
    $car->setPetrol(2);
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();