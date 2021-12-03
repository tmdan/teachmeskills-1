<?php
//Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа

$a =5;
$i=1;
$b=1;
while ($i<$a){
    $b *= $i;
    $i++;

}
echo $b;


$a = 5;
$arr = range(1, $a);
$fact=1;
foreach ($arr as $item) {
    $fact *= $item;
}
var_dump($fact);


$a =5;
$b=1;
for($i=1; $i<$a; $i++){
    $b *= $i;
}
echo $b;