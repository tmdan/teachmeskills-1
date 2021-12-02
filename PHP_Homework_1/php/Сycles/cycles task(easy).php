
<?php
//С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.
function insertInArr($first,$last){
    $arr = [];
    for($first;$first<=$last;$first+=2):
        array_push($arr,$first);
    endfor;
    return $arr;
}
var_dump(insertInArr(1,99));
echo "<br>";

//С помощью готовой функции range заполните массив нечетными числами в промежутке от 1 до 99.
function insertOddNum($first,$last){
        $arr_1 = range($first,$last,2);
    return $arr_1;
}
print_r(insertOddNum(1,99));