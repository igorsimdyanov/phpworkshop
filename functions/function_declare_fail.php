<?php
// Объявляем логическую переменную
$flag = true;

// Вызываем функцию, если переменная $flag равна true
if ($flag) {
    echo getSum(); // Fatal error
}

// Если переменная $flag равна true, объявляем функцию
if ($flag) {
    function getSum()
    {
        $sum = 10 + 5;
        return $sum;
    }
}
