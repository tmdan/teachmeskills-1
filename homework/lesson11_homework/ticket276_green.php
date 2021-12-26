<?php
class HomePet{
    private $petName;
    private $petAge;
    private $petColor;
    private $petType;

    public function __construct($petName, $petAge, $petColor, $petType){
        $this->petName = $petName;
        $this->petAge = $petAge;
        $this->petColor = $petColor;
        $this->petType = $petType;
    }

    public function getPetName()
    {
        return $this->petName;
    }

    public function getPetAge()
    {
        return $this->petAge;
    }

    public function getPetColor()
    {
        return $this->petColor;
    }

    public function getPetType()
    {
        return $this->petType;
    }



    public function myPetSays(){
        if($this->petType == "собака"){
            echo "<br>"."Собака говорит: гав-гав"."<br>";
        }elseif ($this->petType == "кошка"){
            echo "<br>"."Кошка говорит: мяу-мяу"."<br>";
        }else{
            echo "<br>"."Это не кошка и собака, но оно что-то говорит (если у него есть голос)"."<br>";
        }
    }


}

$pet = new HomePet("Дружок", "3 года", "Белый", "собака");

echo "<br>"."Имя - ".$pet->getPetName()."<br>";
echo "<br>"."Возраст - ".$pet->getPetAge()."<br>";
echo "<br>"."Цвет - ".$pet->getPetColor()."<br>";
echo "<br>"."Вид - ".$pet->getPetType()."<br>";
$pet->myPetSays();
?>
