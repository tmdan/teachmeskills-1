<?php
class FootballClub{
    private $name;
    private $yearOfFoundation;
    private $country;

    public function __construct($name,$country,$yearOfFoundation){
        $this->name = $name;
        $this->country = $country;
        $this->yearOfFoundation = $yearOfFoundation;
    }

    public function __set($data, $value){
        $this->$data = $value;
    }

    public function __get($data){
            return $this->$data;
    }

    public function __toString()
    {
        return 'Club name: '.$this->name . '<br>' . 'Age of foundation: '.$this->yearOfFoundation . '<br>'.'Counry: '. $this->country;
    }

}

$FC = new FootballClub('Milan','Italy', 1896);
$FC->numberOfPlayers = 32;
echo $FC."<br>";
echo "<br>"."Number of players - ".$FC->numberOfPlayers."<br>";
?>