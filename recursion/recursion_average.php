<?php
//Дано натуральное число N. Вычислите сумму его цифр.
//Пример: я в функцию передаю число 179. На экран после выполнения нашей рекурсивной функции должно выводиться 1+7+9 = 17
//При решении этой задачи нельзя использовать массивы ну и циклы, разумеется

//$a = explode(".",149);
//$b = strlen(149)-1;
//$num=$a[0][$b];
//$arr=[];
//array_push($arr,$a[0][$b-1]);
//array_push($arr,$a[0][$b-2]);
//array_push($arr,$a[0][$b-3]);


//function sum($arr,$index){
//    if($index>=0){
//        return $arr[$index] + sum($arr,$index-1);
//        echo $arr[$index];
//    }else return 0;
//}
//echo(sum($arr,2));

function sum($num){
    if($num==0){
        return 0;
    }
    else return $num%10+sum((int)($num/10));
}
echo(sum(1494));

