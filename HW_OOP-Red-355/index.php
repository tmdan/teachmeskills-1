<?php
    class Students {
        public $name;
        public $surname;
        public $university;
        function __construct($name, $surname, $university) {
            $this->name = $name;
            $this->surname = $surname;
            $this->university = $university;
        }
    }

    class University {
        public $name;
        public $faculty;
        public $obj = [];
        public function mediumValue() {

        }
    }

    class Subject {
        public $name;
        public $value;
    }


$names = ["Рома", "Нина", "Лена", "Миша", "Дима"];
$lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred = ["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr = [1, 2, 3, 5, 9, 10];

$students = new Students(array_rand($names), array_rand($lastNames), array_rand($uni));

var_dump($students);
