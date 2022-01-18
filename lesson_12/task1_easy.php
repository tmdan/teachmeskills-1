<?php

class Student
{
    private $name;
    private $surename;
    private $data = array();

    public function __construct($name, $surename)
    {
        $this->name = $name;
        $this->surename = $surename;
    }
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        If (isset($this->data[$name])) {
            return $this->data[$name];
        }
    }
    public function __toString()
    {
        return 'Student name: '.$this->name
            . '<br>'
            . 'Student email: '.$this->surename;
    }

}

$objStudent = new Student('Ivan', 'Ivanov');
$objStudent->email = 'example123@gmail.com';
echo $objStudent->email;
echo $objStudent;