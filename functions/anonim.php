<?php
$echoList = function (...$str)
{
    foreach ($str as $v) {
        echo "$v<br />\n";
    }
};
// Вызов функции
$echoList('PHP', 'Python', 'Ruby', 'JavaScript');
