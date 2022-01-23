<?php
/*
Создать объект Мама(Mother) которая содержит приватные сво-ва:
- Work (объект)
защищенные (protected) методы:
- getSalery - Данный метод будет возращать определнный процент
(будет приниматься как аргумент) от итоговый суммы ЗП полученной из объекта Work.

Создать объект Work который содержит привытные св-ва:
- zp (заработная плата) - до вычета налогов
- podNal (подоходный налог)
- socNal (соц. страх)
Публичные методы:
- getZp(получить зп)  - данный метод возвращает ЗП (которая устанавливается в конструкторе при унициализации объекта Work)
за минусом подоходного налога - 13% и соц-страх 23% допустим. Ставки налогов тоже передаются в конструкторе объекта Work.

Создать объект студент (Student) наследуется от мамы, который содержит приватные св-ва:
- name (строка)
- Univer (объект)

публичные методы:
- getSalery() - возвращает итоговый доход студента (это 10% от маминой зп + стипендия)

приватные методы:
- getStipen - возращает итоговую стипендию студента, которая зависит от среднего бала по предметам
(4 и выше это 200 руб, 5-7 это 500 руб, 7 и выше это 1000руб)


Создать объект Univer, приватные св-ва:
- name
- prendents (массив объектов Predmet)

Создать объект Prednet:
- name
- ball
*/

class Mother{
    private $work;

    public function __construct(Work $work){
        $this->work = $work;
    }

    protected function getSalery($interest){
       return $this->work->getZp()* $interest/100 ;
    }

    public function showZP(){
        return $this->work->getZp();
    }
}

class Work{
    private $zp;
    private $podNal;
    private $socNal;

    public function __construct($zp, $podNal, $socNal){
        $this->zp = $zp;
        $this->podNal = $podNal;
        $this->socNal = $socNal;
    }

    public function getZp(){
        return $this->zp - ($this->zp * $this->podNal / 100) - ($this->zp * $this->socNal / 100);
    }
}

class Student extends Mother{
    private $name;
    private $univer;


    public function __construct($name, Univer $univer, Work $work){
        parent::__construct( $work);
        $this->name = $name;
        $this->univer = $univer;
    }

    public function getName(){
        return $this->name;
    }

    public function getSalery($interest){
        // в parent::getSalery(0) передаю 0, т.к. мне нужна сумма зп мамы до того, как она дала процент студенту
        return $this->getStipend() + parent::getSalery(10);
    }

    // стипендия студента
    private function getStipend()
    {
        $averageScore = $this->univer->getAverageScore();
        if ($averageScore===4){
            return 200;
        }elseif ($averageScore>=5 && $averageScore<7){
            return 500;
        } elseif ($averageScore>=7 && $averageScore<=10){
            return 1000;
        }else return 0;
    }
}

class Univer{
    private $name;
    private $predmets = [];

    public function __construct($name, $predmets){
        $this->name = $name;
        $this->predmets = $predmets;
    }

    // средний балл по всем предметам
    public function getAverageScore(){
        $sumBall = 0;
        $numberItems = count($this->predmets);
        foreach ($this->predmets as $predmet){
            $sumBall += $predmet->getBall();
        }
        return $sumBall/$numberItems;
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

$predmets = [
    new Predmet('OOP', 9),
    new Predmet('Maths', 7)
];

$work = new Work(2000, 13, 23);
$mother = new Mother($work);
$BSUIR = new Univer('BSUIR', $predmets);
$Kate = new Student('Kate', $BSUIR, $work);

echo "Зарплата у мамы за вычетом налогов: " . $mother->showZP() . '<br>';
echo "Средний балл по всем предметам: " . $BSUIR->getAverageScore() . '<br>';
echo "Общий доход у студента " . $Kate->getName() . " равняется: " . $Kate->getSalery(10) . "<br>";

