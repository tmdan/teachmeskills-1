<!--Задача #1 - ООП-->
<!--Создать объект - Здание, объект будет содержать следующие свойства:-->
<!--Название (string)-->
<!--Спецификация (string) (жилой дом, административное здание, социальное здание)-->
<!--Налоговая ставка (int) - в процентах - обычная переменная которая хранит число
(далее оно будет необходима для рассчета налога на данный объект недвижимости)-->
<!--МЕТОД (calc) - который нам вернет итоговую сумму налога (которая высчитывается из сумму дохода владельца
данного объекта недвижимости) - т.е. простыми словами берете доход который храниться в свойстве Владелец (object)->доход,
 допустим он 400 руб, далее умножаете его на Налоговая ставка (int) и делите на 100.-->
<!--Владелец (object) - это отдельный объект который содержит:-->
<!---->
<!--Владелец-->
<!---->
<!--Имя (string)-->
<!--Доход (int)-->
<?php
    class Build{
        public $name_build;
        public $spetification;
        public $tax;

        function __construct($name_build,$spetification,$tax) //creat a construction for init new objects
        {
            $this->name_build = $name_build;
            $this->spetification = $spetification;
            $this->tax = $tax;
        }
    }
    class Owner extends Build {
        private $name;
        private $income;

        function __construct($name,$income,$name_build,$spetification,$tax)
        {
            $this->name = $name;
            $this->income = $income;
            parent::__construct($name_build,$spetification,$tax);
        }
        public function calc(){
            return $this->income*$this->tax/100; //total tax
        }

    }

    $build = new Build("HelpPeople","социальное здание","20");
    $owner = new Owner("Prushak","5000",$build->name_build,$build->spetification,$build->tax);
    echo "total tax: ".$owner->calc();