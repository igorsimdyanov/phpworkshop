<?php
// Объявляем логическую переменную
$flag = true;

// Если переменная $flag равна true, объявляем функцию
if (true) {
    function getSum()
    {
        $sum = 10 + 5;
        return $sum;
    }
}

// Вызываем функцию, если переменная $flag равна true
if ($flag) {
    echo getSum(); // 15
}
