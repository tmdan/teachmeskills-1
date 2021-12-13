<?php
echo "Рекурсивая функция, которая на вход принимает число и выводит все его цифры по одной в консоль, в обратном порядке."."<br>";

$num = 179;
function numreverse ($num){
    echo $num%10;
    if ($num = (int)($num/10)){
        return numreverse($num);
    }
}

echo "<br>"."Цифры числа ".$num." в обратном порядке - ";

numreverse($num);
?>;