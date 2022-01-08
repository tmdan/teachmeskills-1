<?php
echo '<h3>'.'Написать регулярное выражение для поиска html тегов <strong>какой то текст</strong> внутри поисковой строки:.</h3>';
echo htmlspecialchars('тут возможен текст <strong>какой то текст</strong> и тут текст <input>какой то текст</input> и тут снова текст<div>какой то текст</div><label>какой то текст</label>');
echo '<br>';

$pattern = '~<[a-z]+>.+?<[^>]+>~';
$str= 'тут возможен текст <strong>какой то текст</strong> и тут текст <strong>какой то текст</strong> и тут снова текст<strong>какой то текст</strong><strong>какой то текст</strong>';
$result = [];

preg_match_all($pattern, $str, $result) ;
echo '<pre>';
print_r($result[0]);
echo '</pre>';
echo "найдено ".count($result[0])." совпадений: <br>";
