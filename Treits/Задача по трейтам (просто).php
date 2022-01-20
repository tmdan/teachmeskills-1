<?php
//Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3.
//Пусть в первом трейте будет метод method1, возвращающий 1,
//во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3.
//Пусть все эти методы будут публичным.
//Создайте интерфейс TraitInterface
//Опишите сигнатуры методов в TraitInterface
//
//Сделайте класс Test, использующий все три созданных трейта и созданный TraitInterface.
//Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.


trait Trait1{
    public function method1(){
        return 1;
    }
}
trait Trait2{
    public function method2(){
        return 2;
    }
}
trait Trait3{
    public function method3(){
        return 3;
    }
}
interface TraitInterface{
    public function method4();
}
class Test implements TraitInterface {
    private int $sum=0;
    use Trait1,Trait2,Trait3;
    public function method4()
    {
        return 4;
    }
    private function getSum(){
        return $this->sum=$this->method1()+$this->method2()+$this->method3();
    }
    public function show(){
        echo "treit_1: ".$this->method1().", ";
        echo "treit_2: ".$this->method2().", ";
        echo "treit_3: ".$this->method3().", ";
        echo "treit sum: ".$this->getSum();
    }
}

$test = new Test();
$test->show();