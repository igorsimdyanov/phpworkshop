<?php
function printAge($age)
{
    $age = intval($age);
    if ($age < 0) {
        trigger_error("Функция printAge(): ".
                      "возраст не может быть".
                      " отрицательным", E_USER_ERROR);
    }
    echo "Возраст составляет: $age";
}

printAge(-10);
// Fatal error: Функция printAge(): возраст не может быть отрицательным
