<?php
// Создать диагностическую рекурсивную функцию, которая на вход принимает число
// и выводит все его цифры по одной в консоль, в обратном порядке.

$n = 179;

function output_revers($n){

    if (mb_strlen($n)===1){
        echo $n;
        return;

    }else{
        $remainder = $n%10;
        echo $remainder;
        output_revers (($n - $remainder)/10);
    }
}

output_revers($n);

