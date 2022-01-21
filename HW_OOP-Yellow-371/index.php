<!--/*Создать объект СТРАНА (Country)-->
<!--Приватные свойства:-->
<!--- Название (name)-->
<!--- Население (population) (массив из объектов ЧЕЛОВЕК)-->
<!--Публичные методы:-->
<!--- Получить количество населения (getPopulation)-->
<!--- Получить средний возраст населения (getAverageAge)-->
<!----------------------------------------------------------->
<!--Создать объект ЧЕЛОВЕК (Human)-->
<!--Приватные свойства:-->
<!--- Имя (name)-->
<!--- Возраст (age)-->
<!--Публичные методы:-->
<!--- Установить имя (из массива)-->
<!--- Установить возраст (рандомно)-->
<!--PS>-->
<!--Приватные методы проверки имени и возраста:-->
<!--- checkName() предусмотреть проверку в приватном методе человека установку имени только строки-->
<!--- использовать в сеттере имени данный приватные метод проверки-->
<!--- checkAge() предусмотреть проверку в приватном методе человека возраста от 1 года до 110 лет-->
<!--(проверка на число и значения в диапазоне) - использовать в сеттере возраста данный приватный метод проверки*/-->

<?php
    class Country {
        private string $name;
        private $population = [];

        public function getPopulation() {
            echo 'Популяция '.count($this->population) . ' человек';
        }
        public function getAverageAge() {
            $averageAge = 0;
            foreach ($this->population as $human) {
                $averageAge += $human->getAge();
            }
            return round($averageAge/count($this->population));
        }
        function __construct($name, $population) {
            $this->name = $name;
            $this->population = $population;
        }
    }

    class Human {
        private $name;
        private $age;

        public function setName($name) {
            $this->name = $name[array_rand($name)];
            $this->checkName();

        }
        public function setAge() {
            $this->age = rand(1, 110);
            $this->checkAge();
        }
        private function checkName() {
            if(!is_string($this->name)) {
                echo 'Ошибка, введены некорректные данные<br>';
                return $this->name = null;
            } else {
                return $this->name;
            }
        }
        private function checkAge() {
            if($this->age >= 1 and $this->age <= 110) {
                return $this->age;
            } else {
                echo 'Возраст меньши 1 или привышает 110<br>';
                return $this->age = null;
            }
        }
        public function getName() {
            return $this->name;
        }
        public function getAge() {
            return $this->age;
        }
        public function __construct($name) {
            $this->setName($name);
            $this->setAge();
        }

    }
    $humans = ['Ilya', 'Nikita', 'Andrey', 'John', 'Michel', 'Fedor', 'Kirill', 'Viktor', 'Dasha'];
    $people = [
        new Human($humans),
        new Human($humans),
        new Human($humans),
        new Human($humans),
        new Human($humans),
        new Human($humans),
        new Human($humans),
        new Human($humans),
    ];

    $usa = new Country('USA', $people);
    echo $usa->getPopulation().'<br>';
    echo $usa->getAverageAge();
    echo '<pre>';
    print_r($usa);
    echo '</pre>';



