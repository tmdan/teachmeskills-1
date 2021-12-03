<?php
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
echo array_sum($arr);
echo "<br>";
$flipped = array_flip($arr);
echo array_sum($flipped);
echo "<br>";
echo $a = array_sum($arr)/array_sum($flipped);
?>