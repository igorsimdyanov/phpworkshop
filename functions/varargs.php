<?php
function echoList(...$items)
{
    foreach ($items as $v) {
        echo "$v<br />\n"; // выводим элемент
    }
}
// Отображаем строки одну под другой
echoList('PHP', 'Python', 'Ruby', 'JavaScript');
