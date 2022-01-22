<?php
class Mother{
    private string $name;
    private $work;
    public function __construct($name,Work $work)
    {
        $this->name=$name;
        $this->work=$work;
    }
    public function getSalary(){
        return $this->work->getSalary();
    }
    private function getSalaryWithoutNalog(){
        return $this->work->getSalaryWithoutNalog();
    }
    public function showSalary(){
        echo "Mother's salary with nalog: ".$this->getSalary()." rub <br>";
        echo "Mother's salary without nalog: ".$this->getSalaryWithoutNalog()." rub <br>";
    }
}
class Work{
    private string $name;
    private int $salaryWithoutNalog;
    private int $salary;
    private int $podNal;
    private int $socNal;
    public function __construct($name,$salary,$podNal,$socNal)
    {
        $this->name=$name;
        $this->salary=$salary;
        $this->podNal=$podNal;
        $this->socNal=$socNal;
        $this->salaryWithoutNalog=$this->salary;
        $this->Salary();
    }
    private function Salary(){
        $this->salary=$this->salary-($this->salary*$this->podNal/100+$this->salary*$this->socNal/100);
    }
    public  function getSalary(){
        return $this->salary;
    }
    public  function getSalaryWithoutNalog(){
        return $this->salaryWithoutNalog;
    }
}
class Student extends Mother{
    private string $name1;
    private int $generalIncome;
    private $university;
    public function __construct($name1,$university,Work $workMom,$name)
    {
        parent::__construct($name, $workMom);
        $this->name1=$name1;
        $this->university=$university;
        $this->setGeneralIncome();
    }

    private function getStipendiaFromUniversity(){
        return $this->university->getStipendia();
    }
    private function setGeneralIncome(){
        $this->generalIncome=$this->getSalary()*10/100+$this->university->getStipendia();
    }
    private function getGeneralIncome(){
        return $this->generalIncome;
    }
    public function showStipendia(){
        echo "stipendia from university: ".$this->getStipendiaFromUniversity()."<br>";
        echo "stipendia from university + 10 % from mom: ".$this->getGeneralIncome()."<br>";
    }
}
class University{
    private string $name;
    private int $stipendia;
    private int $averageMark=0;
    private $studentsRecordBook;
    public function __construct($name,$studentsRecordBook)
    {
        $this->name=$name;
        $this->studentsRecordBook=$studentsRecordBook;
        $this->averageMark();
        $this->calcStipendia();
    }
    private function averageMark(){
        foreach ($this->studentsRecordBook->getRecordBook() as $mark){
            $this->averageMark+=$mark;
        }
    }
    private function calcStipendia(){
        if($this->averageMark/count($this->studentsRecordBook->getRecordBook())===4){
            $this->stipendia = 200;
        }elseif (preg_match_all('/[5-7]{1}/',$this->averageMark/count($this->studentsRecordBook->getRecordBook()))){
            $this->stipendia = 500;
        }elseif ($this->averageMark/count($this->studentsRecordBook->getRecordBook())>7){
            $this->stipendia = 1000;
        }else $this->stipendia = 0;
    }
    public function getStipendia(){
        return $this->stipendia;
    }
}
class Subject{
    private string $subject;
    private int $mark;
    public function __construct($subject,$mark)
    {
        $this->subject=$subject;
        $this->setMark($mark);
    }
   private function checkMark($mark){
        if($mark>0 and $mark<=10){
            return true;
        }else return false;
    }
    private function setMark($mark){
        if($this->checkMark($mark)){
            $this->mark=$mark;
        }
    }
    public function getMark(){
        return $this->mark;
    }
    public function getSubject(){
        return $this->subject;
    }
}
class StudentsRecordBook{
    public array $recordBook=[];
    private $subject;
    public function addSubject(Subject $subject){
        $this->subject=$subject;
        $this->recordBook[$this->subject->getSubject()]=$this->subject->getMark();
    }
    public function showRecordBook(){
        var_dump($this->getRecordBook());
        echo "<br>";
    }
    public function getRecordBook(){
        return $this->recordBook;
    }
}
$work = new Work("Driver",1000,10,10);
$mother = new Mother("Ludmila",$work);
$mother->showSalary();
$subject1 = new Subject("Mathematics",5);
$subject2 = new Subject("Physics",6);
$subject3 = new Subject("Geography",10);
$studentRecordBook=new StudentsRecordBook();
$studentRecordBook->addSubject($subject1);
$studentRecordBook->addSubject($subject2);
$studentRecordBook->addSubject($subject3);
$studentRecordBook->showRecordBook();
$university = new University("BNTU",$studentRecordBook);
$student = new Student("Ilya",$university,$work,"Ludmmila");//зачем делать наследование от мамы?это же нелогично?
$student->showStipendia();




