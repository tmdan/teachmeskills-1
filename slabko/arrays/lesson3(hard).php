<?php
for ($i = 0; $i < 10; $i++) {
    $arr1[]= rand(1, 99);
    echo $arr1[$i].' ';
}
echo '<br>';
$arr2 = array_reverse($arr1);
for ($i = 0; $i < 10; $i++) {
    echo $arr2[$i].' ';
}
?>
