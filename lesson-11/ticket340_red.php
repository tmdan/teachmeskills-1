<?php
    echo "Создать объект Мама(Mother) которая содержит
приватные сво-ва:
- Work (объект)
защищенные (protected) методы:
- getSalery(ПРОЦЕНТ_АРГУМЕНТ) - Данный метод будет возвращать определенный процент (будет приниматься как аргумент) от итоговый суммы ЗП полученной из объекта Work.<br><br>
Создать объект Work который содержит
привытные св-ва:
- zp (заработная плата) - до вычета налогов
- podNal (подоходный налог)
- socNal (соц. страх)
публичные методы:
- getZp(получить зп) - данный метод возвращает ЗП (которая устанавливается в конструкторе при унициализации объекта Work) за минусом подоходного налога - 13% и соц-страх 23% допустим. Ставки налогов тоже передаются в конструкторе объекта Work.<br><br>
Создать объект студент (Student) наследуется от мамы, который содержит
приватные св-ва:
- name (строка)
- Univer (объект)
публичные методы:
- getSalery() - возвращает итоговый доход студента (это 10% от маминой зп + стипендия)
приватные методы:
- getStipen - возращает итоговую стипендию студента, которая зависит от среднего бала по предметам (4 и выше это 200 руб, 5-7 это 500 руб, 7 и выше это 1000руб)<br><br>
Создать объект Univer
приватные св-ва:
- name
- prendents (массив объектов Predmet)
Создать объект Prednet:
публичные св-ва
- name
- ball<br><br>";
