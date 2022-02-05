<?php
class Students {
   private $names;
   private $lastName;
   private $university;

   public function __construct($names,$lastName, $university){
       $this->names=$names;
       $this->lastName=$lastName;
       $this->university=$university;
   }
   public function getName(){
       return $this->names;
   }
   public function getLastName(){
       return $this->lastName;
   }
   public function getUniversity(){
       return $this->university->getUniversityName();
   }
}
class University {
    private $uni;
    private $fac;
    private $predmet=[];

    public function __construct($uni, $fac, $predmet){
        $this->uni=$uni;
        $this->fac=$fac;
        $this->predmet=$predmet;
    }
    public function getUniversityName(){
        return $this->uni;
    }
    public function getFaculty(){
        return $this->fac;
    }
    public function getAverageMark(){
        $sum=0;
        foreach ($this->predmet as $value){
            $sum += $value->getMark();
        }
        return $sum;
    }
}
class Predmet{
    private $pred;
    private $gr;

    public function __construct($pred, $gr){
        $this->pred=$pred;
        $this->gr=$gr;
    }
    public function getPredmet(){
        return $this->pred;
    }
    public function getMark(){
        return $this->gr;
    }
}

$names = ["Рома", "Нина", "Лена", "Миша"];
$lastNames = ["Зеленский", "Пупкина", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred = ["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr = [1, 2, 3, 5, 9, 10];
$study=[];
for($i=0; $i<=4;$i++){
    $study[]= new Students($names[array_rand($names,1)], $lastNames[array_rand($lastNames,1)],
        new University($uni[array_rand($uni,1)], $fac[array_rand($fac,1)],
            new Predmet($pred[array_rand($pred,1)], $gr[array_rand($gr,1)])));
}



