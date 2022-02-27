<?php
$dir = 'slabko';
if (!file_exists("./$dir")) {
    mkdir("./$dir");
}

$dir2 = date('Y');
if (!file_exists("./$dir/$dir2")){
    mkdir("./$dir/$dir2");
}

$date = date("d.m.y");
$file = "file_easy.txt";
if (!file_exists("./$dir/$dir2/$file")){
    $fp = fopen("./$dir/$dir2/$file", "w");
    fwrite($fp, "SlabkoMI $date");
    fclose($fp);
}
?>
