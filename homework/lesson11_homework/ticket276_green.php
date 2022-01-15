<?php
class HomePet{
    private $petName;
    private $petAge;
    private $petColor;
    private $petType;
    private $golos;

    public function __construct($petName, $petAge, $petColor, $petType, $golos){
        $this->petName = $petName;
        $this->petAge = $petAge;
        $this->petColor = $petColor;
        $this->petType = $petType;
        $this->golos = $golos;
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
        echo "<br>"."Голос - ".$this->golos."<br>";
    }


}

$pet = new HomePet("Дружок", "3 года", "Белый", "собака","Гав-гав");

echo "<br>"."Имя - ".$pet->getPetName()."<br>";
echo "<br>"."Возраст - ".$pet->getPetAge()."<br>";
echo "<br>"."Цвет - ".$pet->getPetColor()."<br>";
echo "<br>"."Вид - ".$pet->getPetType()."<br>";
$pet->myPetSays();
?>
