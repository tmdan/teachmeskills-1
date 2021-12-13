<?php
echo "Сумма натуральных цифр числа с помощью рекурсии"."<br>";

$num = 179;
function sumrec ($num){
    if ($num/10 != 0){
        return $num%10 + sumrec($num/10);
    }else{
        return $num%10;
    }
}

echo "<br>"."Сумма натуральных цифр числа ".$num." равна - ".sumrec($num)."<br>";
?>