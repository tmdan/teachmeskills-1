<?php
echo 'С помощью двух вложенных циклов выведите на экран следующую строку:';
echo '<br>'.'"1 вариант - 111222333444555666777888999"'.'<br>';
echo '<br>';
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=3 ; $j++) { 
        echo $i;
    }
}
echo '<br>';
echo '<br>'.'"2 вариант - 11 12 13 21 22 23 31 32 33"'.'<br>';
echo '<br>';
for ($i=1; $i <=3 ; $i++) {  
    for ($j=1; $j <= 3; $j++) { 
        echo $i.$j.' ';
    }
}
// done)