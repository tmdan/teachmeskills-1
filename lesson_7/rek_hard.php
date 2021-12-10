<?php
$a = 179;
function numSum($a) {
    $buf = 0;
    $buf += $a % 10;
    $a /= 10;

    if ($buf === 0) {
        return $buf;
    }
    echo $buf;
    numSum($a);

}
numSum($a);