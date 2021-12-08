<?php
/*Дано натуральное число N. Вычислите сумму его цифр.*/

$num = 179;
$sum = 0;
$length = mb_strlen($num);

function summ($num, $sum, $length){

    if ($length===1){
        $sum += $num;
        echo 'Сумма ' . $sum . "<br>";
        return;
    }else
    {
        $sum += intdiv($num, 10**($length-1));
        $remainder = $num% 10**($length-1);
        summ($remainder, $sum, mb_strlen($remainder));
    }

}

echo "Узнаем сумму цифр числа " . $num . ": ";
summ($num, $sum, $length);

