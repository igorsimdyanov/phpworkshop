<?php
// Объявление функций
function hello()
{
    return 'Hello!';
}
function bye()
{
    return 'Bye!';
}

// Случайный выбор функции
$var = rand(0, 1) ? 'hello' : 'bye';

// Вызов функции
$var();
