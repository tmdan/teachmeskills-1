<?php
echo "Создайте массив из n (рандомное количество) элементов - напишите алгоритм который бы переставил элементы массива в обратный порядок<br> - т.е. первый элемент сдвинулся бы на последний, второй элемент сдвинулся бы на предпоследний и так далее.<br><br>";
$n = mt_rand(0,100);
$arr = [];
for ($i = 0; $i <= $n; $i++) {
    array_push($arr, mt_rand(0, $n));
};
echo "Исходный массив длиной $n <br>" . implode(", ",$arr) . "<br>";
if ($n % 2 == 0) {
    for ($i = 0; $i <= $n/2; $i++) {
        $dif = $arr[$i];
        $arr[$i] = $arr[$n - $i];
        $arr [$n - $i] = $dif;
    }} else {
    for ($i = 0; $i <= ($n+1)/2; $i++) {
        $dif = $arr[$i];
        $arr[$i] = $arr[$n - $i];
        $arr [$n - $i] = $dif;
    }
};
echo "Новый массив <br>" . implode(", ",$arr) . "<br>";