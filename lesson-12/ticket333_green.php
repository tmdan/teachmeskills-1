<?php
    echo "создайте любой объект<br><br>
внедрите в ваш класс 4 любых магических метода<br><br>
покажите реальные примеры использование данных магических методов<br><br>";
    class travelAgency {
        private $name;
        private $numberWorkers;
        public function __construct($name) {
            $this->name = $name;
        }
        public function __set($name, $value) {
            echo "Устанавливаем число сотрудников в фирме $this->name равным $value <br><br>";
            $this->numberWorkers = $value;
        }
        public function __get($numberWorkers) {
            return $this->numberWorkers;
        }
        public function __toString() {
            return $this->name;
        }
    }
$travelCompany = new travelAgency("Roman-Travel");
$travelCompany->numberWorkers = 15;
echo "Выводим число сотрудников $travelCompany->numberWorkers<br><br>";
echo $travelCompany;

