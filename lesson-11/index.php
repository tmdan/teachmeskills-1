<?php


//----------------------------------------------------------------------------------//
//.........................................................................1 пример:
//---------------------------------------------------------------------------------//

{
    class Car
    {
        //Название машины - строка
        private $namecar;

        //Двигатель - объект двигателя
        public  $engine;

        //Устанавливаем название машины
        public function setNamecar($namecar)
        {
            //Проверяем название машины строка ли если строка то устанавливаем для текущего объекта машины название
            if (is_string($namecar)) {
                $this->namecar = $namecar;
            }
        }

        //Получаем название машины - ГЕТТЕР
        public function getNamecar()
        {
            //Возвращаем из текущего объекта машины название машины
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

        public function __construct(Engine $engine, $namecar)
        {
            $this->namecar = $namecar;
            $this->engine= $engine;
        }

        //Выводим на спидометре информацию о текущем запасе масла
        public function getOldInfo()
        {
            //Обращаемся к датчику который установлен в двигателе и получаем информацию о количестве масла в двигателе
            return $this->engine->getPetrol();
        }

    }


    //Создаем объект двигателя
    class Engine
    {
        // бензин
        private $petrol;

        // сжеть один литр бензина из бензобака
        public function burnGasoline(){
            $this->petrol --;
        }

        // получить количество бензина в баке
        public function getPetrol(){

            return $this->petrol;
        }

        //Пополнить бензин
        public function setPetrol($petrol)
        {
            return $this->petrol = $petrol;
        }

        public function __construct($petrol)
        {
            $this->petrol=$petrol;
        }

    }


    //Создаю двигатель на заводе c 5 литрами
    $engine = new Engine("5");

    //Создаем машину
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


    echo "Заправим на 20 л" . '<br>';
    $car->engine->setPetrol("20");
    $car->getOldInfo();

    $car->move();
    $car->getOldInfo();

}

