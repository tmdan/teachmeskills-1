<?php
$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo $factorial;
echo "<br>";
?>

<?php
$a = 1;
$factorial1 = 5;
$m=1;
while ($m <= $factorial1) {
    $a = $m * $a;
    $m++;
}
echo $a;
echo "<br>";
?>

<?php
$k = 5;
$arr = range(1, $k);
$fact=1;
foreach ($arr as $item) {
    $fact *= $item;
}
echo $fact;
?>