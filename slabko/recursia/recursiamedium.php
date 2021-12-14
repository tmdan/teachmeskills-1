<?php
function sum_of_digit($n)
{
    if ($n == 0)
        return 0;
    return ($n % 10 + sum_of_digit($n / 10));
}

$num = 12345;
$result = sum_of_digit($num);
echo("Sum of digits in " . $num . " is " . $result);
?>