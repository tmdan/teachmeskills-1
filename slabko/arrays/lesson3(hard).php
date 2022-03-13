<?php
for ($i = 0; $i < 10; $i++) {
    $arr1[]= rand(1, 99);
    echo $arr1[$i].' ';
}
echo '<br>';
for ($i=count($arr1)-1;$i>=0; $i--) {
    echo $arr1[$i].' ';
}
?>
