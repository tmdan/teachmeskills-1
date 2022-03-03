<?php
class Studets{
    private $name;
    private $lastname;
    private $university;

    public function __construct($name,$lastname,$university){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->university = $university;
    }
}

class Universities{
    private $name;
    private $faculty;
    private $subjects = [];

    public function __construct($name, $faculty,$subjects){
        $this->name = $name;
        $this->faculty = $faculty;
        $this->subjects = $subjects;
    }

    public function averageGrade(){
        
    }

}

Class Subjects{
    private $name;
    private $grade;

    public function __construct($name,$grade){
        $this->name=$name;
        $this->grade=$grade;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }
}




?>