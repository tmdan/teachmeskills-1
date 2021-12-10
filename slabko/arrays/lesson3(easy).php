<?php
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
echo array_sum($arr);
echo "<br>";
$flipped = array_flip($arr);
echo array_sum($flipped);
echo "<br>";
echo $a = array_sum($arr)/array_sum($flipped);
echo "<br>";
?>

<!--lesson 3 easy, second part-->
<?php
$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arr2 = [];
$arr3 = [];
foreach ($arr1 as $key => $value) {
    array_push($arr2, $key);
    array_push($arr3, $value);
}

var_dump($arr2);
echo "<br>";
var_dump($arr3);

?>