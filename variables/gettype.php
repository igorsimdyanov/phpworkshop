<?php
// Объявляем целую переменную
$number = 123;
echo gettype($number) .'<br/>'; // integer

// Объявляем логическую переменную
$flag = true;
echo gettype($flag) .'<br/>'; // boolean

// Объявляем строковую переменную
$str = '';
echo gettype($str) .'<br/>'; // string

// Объявляем вещественную переменную
$var = 1.7;
echo gettype($var) .'<br/>'; // double

// Уничтожаем переменную $var
unset($var);
echo gettype($var); // null
