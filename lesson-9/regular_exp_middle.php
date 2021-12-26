<?php
$pattern1 = "/<\w*>[^>]*>/";
$subject1 = "тут возможен текст <strong>какой то текст</strong> и тут текст <strong>какой то текст</strong> и тут сново текст";
echo (preg_match_all($pattern1, $subject1)) ? "True<br>" : "False<br>";