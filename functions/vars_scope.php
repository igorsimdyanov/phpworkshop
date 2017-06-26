<?php
function getSum()
{
    $var = 5;      // локальная переменная
    return $var;
}
$var = 10;         // внешняя переменная
echo getSum();     // 5 (локальная переменная)
echo "<br />$var"; // 10 (внешняя переменная)
