<?php
    echo htmlspecialchars("Написать регулярное выражение для поиска html тегов <strong>какой то текст</strong> внутри поисковой строки:") . "<br><br>";
    echo htmlspecialchars("тут возможен текст <strong>какой то текст</strong> и тут текст <strong>какой то текст</strong> и тут сново текст") . "<br><br>";
    $pattern = "/<[a-z]*>[^>]*>/u";
    $subject = "тут возможен текст <strong>какой то текст</strong> и тут текст <strong>какой то текст</strong> и тут сново текст";
    if (preg_match_all($pattern, $subject)) {
        echo "Поиск работает<br>";
    };
    echo "<a href=\"https://regex101.com/r/yTzlTf/1\">Проверка regex101</a><br><br>";