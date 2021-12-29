<?php
    class Pet{
        private string $Type;
        private string $Name;
        private string $Color;
        private int $Age;

       public function __construct($Type, $Name, $Color, $Age){
           $this->Type = $Type;
           $this->Name = $Name;
           $this->Color = $Color;
           $this->Age = $Age;
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


        public function golos(){
            if($this->Type == 'собака'){
                echo "ГАВ-ГАВ";
            } elseif ($this->Type == 'кошка'){
                echo 'МЯУ';
            }
        }
    }

$Dog= new Pet('Собака', 'Дружок', 'Чёрный', 3);

$Dog->getType();
$Dog->getName();
$Dog->golos();
$Dog->getColor();
$Dog->getAge();
echo '<br> <br>';

$Cat = new Pet('Кошка', 'Мурка', 'Белая', 2);

$Cat->getType();
$Cat->getName();
$Cat->golos();
$Cat->getColor();
$Cat->getAge();