<?php

$re = '/^(http|https):\/\/[a-z]*\.[a-z]{2,4}\/?/m';
$str = 'http://example.com/ 
https://teachmeskills.by/
htt://teachmeskills.by/
';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);


echo '<pre>' . var_export($matches, true) . '</pre>';



$re = '/^[0-9]{4}\/[0-1][0-9]\/[0-3][0-9]\s[0-2][1-9]:[0-5][0-9]/m';
$str = '2012/09/18 12:10
2012/25/18 12:10
2012-09-18 12:10
2012/09/18 12:10
';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
echo '<pre>' . var_export($matches, true) . '</pre>';
