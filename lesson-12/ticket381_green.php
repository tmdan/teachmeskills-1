<?php
echo "Задача:<br><br>
Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3.<br><br>
Пусть в первом трейте будет метод method1, возвращающий 1, во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3.<br><br>
Пусть все эти методы будут публичным.<br><br>
Создайте интерфейс TraitInterface<br><br>
Опишите сигнатуры методов в TraitInterface<br><br>
Сделайте класс Test, использующий все три созданных трейта и созданный TraitInterface. Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.<br><br>";

trait Trait1 {
    public function method1() {
        return 1;
    }
}
trait Trait2 {
    public function method2() {
        return 2;
    }
}
trait Trait3 {
    public function method3() {
        return 3;
    }
}
interface TraitInterface{
    public function method1();
    public function method2();
    public function method3();
    public function getSum();
}
class Test implements TraitInterface{
    use Trait1, Trait2, Trait3;
    public function getSum(){
        echo "Сумма = " . $this->method1()+$this->method2()+$this->method3();
    }
}
$test = new Test();
$test->getSum();
