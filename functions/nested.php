<?php
// Объявление внешней и вложенной функций
function outter()
{
    function inner()
    {
        return "Hello, world!";
    }
}

// Вызываем функцию outter(), чтобы объявить функцию inner()
outter();

// Функция inner() не может быть вызвана до тех пор,
// пока не будет вызвана функция outter();
echo inner();
