<?php
$a = 180;

function numSum($a)
{
    return ($a > 0) ? numSum(intdiv($a, 10)) + $a % 10 : 0;
}

echo numSum($a);