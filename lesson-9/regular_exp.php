<?php
$pattern1 = "/(http|https):\/\/\w+.\w+\/?/";
$subject1 = "http://example.com/";
echo (preg_match_all($pattern1, $subject1)) ? "True<br>" : "False<br>";

$pattern2 = "/\d{4}\/(0[1-9]|1[0-2])\/(0[1-9]|1[0-9]|2[0-9]|3[0-1])\s(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-3]|3[0-9]|4[0-9]|5[0-9])/";
$subject2 = "2012/12/31 12:10";
echo (preg_match_all($pattern1, $subject1)) ? "True<br>" : "False<br>";

$pattern3 = "/г.\s(\w|\W)+\sул.\s(\w|\W)+\s\d+,\sдом\s\d+\sкв.\s\d+/";
$subject3 = "г. Минск ул. Основателей 7, дом 53 кв. 3";
echo (preg_match_all($pattern3, $subject3)) ? "True<br>" : "False<br>";