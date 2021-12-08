<?php
     $arr = [3,6,"g","h",2];
     function foo($arr) {
      if ($arr) {
       echo(array_shift($arr) . " ");
       foo($arr);
      }
     }
     foo($arr);
     echo "<br>";

function foo2($arr2) {
    foreach ($arr2 as $elem) {
       if (is_array($elem)) {
        foo2($elem);
       } else {
        echo ($elem) . " ";
       }
    }
}
foo2([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]);
phpinfo();
?>

