<!------ Ребят задачка интересная - особенно если брать реальные расстояния между планетами. Поэтому надеюсь что его сделаете сами. Будет как домашка. - ---->
<!---->
<!--Создать объект космический корабль-->
<!--Приватные свойства-->
<!--- Название (string)-->
<!--- скорость(int)  в кл/c - километро в секунду-->
<!--- маршрут (объект Planet)-->
<!---->
<!--Публичные методы (можно все через конструктор установить):-->
<!--- Установить скорость вашего космического судна-->
<!--- Установить название-->
<!--- Установить маршрут (принимает в себя объект Planet)-->
<!--- Получить время в годах наверное или в днях,  за которое ваш корабль достигнет планету (надо учитывать скорость)-->
<?php
    class Spaceship{
        private $name;
        private $speed=49000;
        private $route;
        private $distination;
        public function __construct($name,$route)
        {
            $this->name=$name;
            $this->route=$route;
        }
        public function timeToEarth(){
            if(strtolower($this->route) === "jupiter"){
                $this->distination = 822960000000;
            }elseif(strtolower($this->route) === "saturn"){
                $this->distination = 1597400000000;
            }else return "This planet is not put in our base!";
            echo "You fly from Earth to $this->route <br>";
            echo "Time to Earth: ".round($this->distination/$this->speed)." hours <br>";
        }
    }
$spaceship = new Spaceship("Star","juPiter");
echo $spaceship->timeToEarth();

                                                            //1 ЗАДАЧА
//----------------------------------------------------------
//Создать объект СТРАНА (Country)
//Приватные свойства:
//- Название (name)
//- Население (population) (массив из объектов ЧЕЛОВЕК)
//
//Публичные методы:
//- Получить количество населения (getPopulation)
//- Получить средний возраст населения (getAverageAge)
//-------------------------------------------------------
//Создать объект ЧЕЛОВЕК (Human)
//Приватные свойства:
//- Имя (name)
//- Возраст (age)
//
//Публичные методы:
//- Установить имя (из массива)
//- Установить возраст (рандомно)
//
//PS>
//Приватные методы проверки имени и возраста:
//- checkName() предусмотреть проверку в приватном методе человека установку имени только строки -
// использовать в сеттере имени данный приватные метод проверки
//- checkAge() предусмотреть проверку в приватном методе человека возраста от 1 года до 110 лет (проверка на число и значения в диапазоне)
// - использовать в сеттере возраста данный приватный метод проверки
//------------------------------------------------------
//Создать минимум 6 человек. и реализовать выше описанную логику в классах
class Country{
    private $name;
    private $human;//заглушка
    public function __construct($human)
    {
        $this->human = $human;
    }
    public function getPopulation(){
        echo "Population: ".count($this->human->population)."<br>";
    }
    public  function getAverageAge(){
        $averag_age = 0;
        for($a=0;$a<count($this->human->population);$a++){
            $averag_age+=$this->human->population[$a];
        }
        echo "Average age:".round($averag_age/count($this->human->population));
    }
}
class Human{
    private $nameExisting = ["ilya","kirill","sergey","nick","july","oliy"];
    private $name;
    public $age;
    public $population=[];

    public function setName()
    {
        $this->name = $this->nameExisting[array_rand($this->nameExisting)];
        //проверку не устанавливал так как мы имя задаем из массива а не руками.Проверка ненужна
    }
    public function setAge(){
        $this->age = rand(1,110);//cheking is not need. The method rand do it itself;
    }
    public function getNameAge(){
        echo "$this->name:$this->age <br>";
    }
    public function addHuman($num){
        if($num!==0){
            $num--;
            $this->setName();
            $this->setAge();
            $this->getNameAge();
            array_push($this->population,$this->age);
            return $this->addHuman($num);
        }else return 0;

    }
}
    $human = new Human();
    $human->addHuman(5);
    $country = new Country($human);
    $country->getPopulation();
    $country->getAverageAge();
