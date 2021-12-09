<?php
$arr=[1,2,3,4,5];
$numArr = count ($arr)-1;
$newArr=[];
for($i=$numArr; $i>=0; $i--){
    $newArr=$arr[$i];
    var_dump($newArr);
}
//echo '<pre>' . var_export($arr) . '</pre>';
//echo '<pre>' . var_export($newArr) . '</pre>';