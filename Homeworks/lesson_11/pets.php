<?php
    class Pet{
        private string $Type;
        private string $Name;
        private string $Color;
        private int $Age;
        private string $Sound;

       public function __construct($Type, $Name, $Color, $Age, $Sound){
           $this->Type = $Type;
           $this->Name = $Name;
           $this->Color = $Color;
           $this->Age = $Age;
           $this->Sound = $Sound;

       }

        public function getType(): string
        {
            echo $this->Type.'<br>';
            return $this->Type;
        }

        public function getName(): string
        {
           echo "Имя — $this->Name <br>";
           return $this->Name;
        }

        public function getColor(): string
        {
            echo 'Цвет — '.$this->Color.'<br>';
            return $this->Color;
        }

        public function getAge(): int
        {
            echo "Возраст — $this->Age года <br>";
            return $this->Age;
        }
        public function getSound() {
           echo "$this->Name издаёт $this->Sound";
        }

    }

$Dog= new Pet('Собака', 'Дружок', 'Чёрный', 3, 'ГАВ-ГАВ');

$Dog->getType();
$Dog->getName();
$Dog->getColor();
$Dog->getAge();
$Dog->getSound();
echo '<br> <br>';

$Cat = new Pet('Кошка', 'Мурка', 'Белая', 2, 'МЯУ-МЯУ');

$Cat->getType();
$Cat->getName();
$Cat->getColor();
$Cat->getAge();
$Cat->getSound();
