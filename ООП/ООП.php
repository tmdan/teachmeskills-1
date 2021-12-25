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
    class Building{
        private $name;
        private $specification;
        private $tax;
        private $owner;//заглушка

        public function __construct($name,$specification,$tax,$owner)
        {
            $this->name=$name;
            $this->specification=$specification;
            $this->tax=$tax;
            $this->owner=$owner;
        }
        public function calc(){
            echo $this->owner->income*$this->tax/100;
        }
    }
    class Owner extends Building { //использовал наследование чтобы применить модификатор protected
        private $name;//Верно ли privet и protected - хороший тон?
        protected $income;//без наследования protected не работает и нужно ставить public что есть плохо (даход конечный,нельзя изменять)

        public function __construct($name,$income)
        {
            $this->name=$name;
            $this->income=$income;
        }
    }
    $owner = new Owner("Ilya","4000");
    $building = new Building("Office","Administration building",20,$owner);
    $building->calc();