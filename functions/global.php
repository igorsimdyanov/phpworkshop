<?php
function getSum()
{
    global $var;
    $var = 5; // изменяем глобальную переменную
    return $var;
}
$var = 10;
echo "$var<br />";      // выводит 10
echo getSum().'<br />'; // выводит 5(глобальная переменная изменена)
echo "$var<br />";      // выводит 5
