<?php
    echo "Напишите регулярное выражение для проверки :</br>
------------------------------------------------</br>
- Пример 1: http://example.com/ - Доменных имен для протоколов http и https, с необязательным слешем в конце. Специальные символы не используются.</br> 
- Пример 2:  даты: 2012/09/18 12:10</br>
- Пример 3: Адрес в формате: г. Минск, ул. Основателей, дом 53, кв. 3 PS>естественно адрес может быть любой</br></br></br>";

    $pattern1 = "/https?:\/\/[a-z]+\.{1}[a-z]+\/?/i";
    $subject1 = "http://example.com/ https://onliner.by https://TeachMeSkills.by";
    echo "Количество совпадений $subject1 равно " . preg_match_all($pattern1, $subject1) . "<br>";
    echo "<a href=\"https://regex101.com/r/2H8qXY/1\">Проверка regex101</a><br><br>";

    $pattern2 = "/^\d{4}\/[0-1][0-9]\/[0-3][0-9]\s[0-1]?[0-9]\:[0-5][0-9]$/";
    $subject2 = "2012/09/18 12:10";
    if (preg_match_all($pattern2, $subject2)) {
        echo "Проверка даты: $subject2 верно<br>";
    };
    echo "<a href=\https://regex101.com/r/bQE89I/1\">Проверка regex101</a><br><br>";

    $pattern3 = "/^г\.\s[А-Я][а-яё]+,\sул\.\s[А-Я][а-яё]+,\sдом\s\d+,\sкв\.\s\d+$/u";
    $subject3 = "г. Минск, ул. Основателей, дом 53, кв. 3";
    if (preg_match_all($pattern3, $subject3)) {
        echo "Проверка адреса: $subject3 верно<br>";
    };
    echo "<a href=\"https://regex101.com/r/nFC2Wq/1\">Проверка regex101</a><br><br>";






