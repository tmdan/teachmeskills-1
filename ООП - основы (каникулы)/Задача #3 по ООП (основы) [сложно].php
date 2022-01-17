<?php
class Student{
    private string $name;
    private string $lastname;
    private $university;
    private $subject;

    public function __construct($name,$lastname,University $university,Subject $subject)
    {
        $this->name=$name;
        $this->lastname=$lastname;
        $this->university=$university;
        $this->subject=$subject;
    }
    public function getSubject(){
        return $this->subject;
    }
}
class University{
    private string $name;
    private string $fuculty;

    public function __construct($name,$faculty)
    {
        $this->name=$name;
        $this->fuculty=$faculty;
    }
}
class Subject{
    private string $name;
    private string $grade;
    public function __construct($name,$grade)
    {
        $this->name=$name;
        $this->grade=$grade;
    }
    public function getGrade(){
        return $this->grade;
    }

}

$names = ["Рома", "Нина", "Лена", "Миша", "Дима"];
$lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred = ["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr = [1, 2, 3, 5, 9, 10];
$students = [];
$sumGrade = 0;
for($i=0;$i<4;$i++){
    $s = new Student($names[array_rand($names,1)],$lastNames[array_rand($lastNames,1)],
    new University($uni[array_rand($uni,1)],$fac[array_rand($fac,1)]),
    new Subject($pred[array_rand($pred,1)],$gr[array_rand($gr,1)]));
    $students[$i]=$s;
}
foreach ($students as $student){
    var_dump($student->getSubject()->getGrade());
    $sumGrade+=$student->getSubject()->getGrade();
}
echo "<br> Sum of grades: ".$sumGrade;

