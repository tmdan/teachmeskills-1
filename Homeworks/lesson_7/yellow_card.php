<?php

$num = 179;

function getSum($n){
    $res = intval(strval($n)[-1]);
    $str = substr(strval($n),0,-1);
        if (strlen($str)>=1){
         $res += getSum(intval($str));
        }
    return $res;
}
echo getSum($num);

