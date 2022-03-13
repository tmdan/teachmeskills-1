<?php
   class University
   {
       public $name;
       public $foundingDate;

       public function __construct($name ,$foundingDate)
       {
           $this->name = $name;
           $this->foundingDate = $foundingDate;
       }

       public function __set($data, $value)
       {
           $this->$data = $value;
       }

       public function __get($data){
           return $this->$data;
       }

       public function __toString()
       {
           return 'The name of my university is '.$this->name . ' , he was founded in '.$this->foundingDate;
       }
   }

$univer = new University('BSU',1925);
$univer->numberOfStudents = 5000;
echo $univer."<br>";
echo 'Number of students - '.$univer->numberOfStudents;
?>