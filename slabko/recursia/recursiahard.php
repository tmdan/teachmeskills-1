<?php
function reversDigits($num)
{
    $rev_num = 0;
    while($num > 1)
    {
        $rev_num = $rev_num * 10 + $num % 10;
        $num = (int)$num / 10;
    }
    return $rev_num;
}

$num = 4562;
echo "Reverse of $num is ", reversDigits($num);
?>