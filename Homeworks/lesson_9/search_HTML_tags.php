<?php
echo '<h3>'.'Написать регулярное выражение для поиска html тегов <strong>какой то текст</strong> внутри поисковой строки:.</h3>';
echo htmlspecialchars('тут возможен текст <strong>какой то текст</strong> и тут текст <div>какой то текст</div> и тут снова текст<div>какой то текст</div><label>какой то текст</label>');
echo '<br>';

$pattern = '/<.+?>.+?<\/.+?>/';
$str= 'тут возможен текст <strong>какой то текст</strong> и тут текст <div>какой то текст</div> и тут снова текст<div>какой то текст</div><label>какой то текст</label>';
$result = [];

preg_match_all($pattern, $str, $result) ;

echo "найдено ".count($result[0])." совпадений: <br>";
