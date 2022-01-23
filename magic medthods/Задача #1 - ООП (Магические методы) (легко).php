<?php
//создайте любой объект
//внедрите в ваш класс 4 любых магических метода
//покажите реальные примеры использование данных магических методов

class Human{
    private string $name;
    private int $age;
    private array $knowledge=["C#","C++","Php"];
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function __toString(): string //магический метод
    {
        return $this->name;
    }
    public function __invoke($name){ //магический метод
        $this->name=$name;
        return $this->name;
    }
    public function __debuginfo(){ //магический метод
        return $this->knowledge;
    }
    public function __call($name, $arguments) {
        $this->checkAge();
        echo "Вызов метода '$name' "
            . implode($arguments);
    }
    private function checkAge(){
        //something...
    }
    public function __clone(){
        $this->name = "Super";
    }
    public function getName(){
        return $this->name;
    }
}
$human=new Human("Ilya",25);
echo $human; //приминение магического метода __toString()
echo $human("Kirill");//приминение магического метода __invoke()
var_dump($human);//приминение магического метода __debuginfo()
$human->checkAge("-проверка возраста");//приминение магического метода __call()
$human2 = clone $human; // приминение магического метода __clone() тот же обьект как и $human, но с другим именем
echo $human2->getName();


