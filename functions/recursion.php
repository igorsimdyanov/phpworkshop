<?php
function callself($counter)
{
    // Если параметр $counter больше продолжаем рекурсивный спуск
    if ($counter > 0) {
        // Уменьшаем значение параметра $counter и выводим его значение
        echo ($counter--) . '<br />';
        // Осуществляем рекурсивный вызов функции callself()
        callself($counter);
    }
    // Если значение параметра меньше или равно 0, прекращаем
    // рекурсивный спуск
    else return;
}
// Вызываем функцию callself()
callself(4);