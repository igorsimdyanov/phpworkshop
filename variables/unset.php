<?php
// Объявляем переменные
$user = "Юрий";
$number = 123;
// Уничтожаем переменные
unset($user, $number);
// Попытка обращения к несуществующей переменной
echo $user; // Генерируется "Notice: Undefined variable"
