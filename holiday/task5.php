<?php
/*Каждый студент содержит:
1. Имя;
2. Фамилия;
3. Университет - это переменная которая содержит объект университета;

Каждый университет содержит:
1. Название;
2. Факультет;
3. Массив из объектов предметов;
4. Метод который выдает средний бал - вычисляется он из массива объектов предметов;

Каждый предмет содержит:
1. Название
2. Оценка

Создайте массив из объектов студентов, заполните рандомно в цикле используя данные из массивов:
Т.е. каждый раз будут создаваться объекты, с рандомными комбинациями данных из массивов указанных ниже

$names = ["Рома", "Нина", "Лена", "Миша", "Дима"];
$lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred = ["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr = [1, 2, 3, 5, 9, 10];
*/

class Student{
    private $name;
    private $lastName;
    private $university;

    public function __construct($name, $lastName, $university){
        $this->name         = $name;
        $this->lastName     = $lastName;
        $this->university   = $university;
    }

    public function showBall(){
        return $this->university->showAverageScore();
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getUniversity(){
        return $this->university->getName();
    }

}

class University{
    private $name;
    private $faculty;
    private $predmets = [];

    public function __construct($name, $faculty, $predmets){
        $this->name     = $name;
        $this->faculty  = $faculty;
        $this->predmets = $predmets;
    }

    // выводит средний балл по всем предметам
    public function showAverageScore(){
        $sum = 0;
        foreach ($this->predmets as $predmet){
            $sum += $predmet->getBall();
        }

        echo "Средний балл по всем предметам " . round($sum/count($this->predmets), 2)  . "<br>";
    }

    public function getName(){
        return $this->name;
    }

    public function getFaculty(){
        return $this->faculty;
    }
}

class Predmet{
    private $name;
    private $ball;

    public function __construct($name, $ball){
        $this->name = $name;
        $this->ball = $ball;
    }

    public function getName(){
        return $this->name;
    }

    public function getBall(){
        return $this->ball;
    }
}

function createArrayPredmets($arrNamePredmets, $kolPredmets){

    $arrObjectPredmets = [];

    for ($i=0; $i<$kolPredmets;$i++){

        //выбираем из массива элемент
        $predmet = array_splice($arrNamePredmets, array_rand($arrNamePredmets),1);
        $arrObjectPredmets[] = new Predmet( $predmet, rand(1,10) );
    }

    return $arrObjectPredmets;
}

function createArrayStudents(){

    $names = ["Рома", "Нина", "Лена", "Миша", "Дима"];
    $lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
    $universities = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
    $faculties = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
    $predmets = ["Физика", "Химия", "Математика", "Биология", "Физкультура"];
    $gr = [1, 2, 3, 5, 9, 10];

    $arrObjectStudents = [];
    // создадим 5 студентов
    for ($i=0; $i<5; $i++){

        $arrPredmets = createArrayPredmets($predmets, 3) ;

        $arrObjectStudents[]= new Student(
            $names[array_rand($names)],
            $lastNames[array_rand($lastNames)],
            new University(
                $universities[array_rand($universities)],
                $faculties[array_rand($faculties)],
                $arrPredmets
            )
        );
    }
    return $arrObjectStudents;
}

function showStudents($arrObjectStudents){
    //echo "Созданные студенты: " . '<br>';
    //echo '<pre>' . var_export($arrObjectStudents, true) . '</pre>';

    echo "Выведем данные о студенте из классов: " . "<br>";

    for ($i=0; $i<count($arrObjectStudents); $i++){

        echo "Студент " . $arrObjectStudents[$i]->getName() . " " . $arrObjectStudents[$i]->getLastName() . " учится в "
            . $arrObjectStudents[$i]->getUniversity() . ". ";
        echo $arrObjectStudents[$i]->showBall();
    }
}

$arrObjectStudents = createArrayStudents();
showStudents($arrObjectStudents);
