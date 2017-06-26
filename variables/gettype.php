<?php
// Объявляем целую переменную
$number = 123;
echo gettype($number); // integer

// Объявляем логическую переменную
$flag = true;
echo gettype($flag); // boolean

// Объявляем строковую переменную
$str = '';
echo gettype($str); // string

// Объявляем вещественную переменную
$var = 1.7;
echo gettype($var); // double

// Уничтожаем переменную $var
unset($var);
echo gettype($var); // null
