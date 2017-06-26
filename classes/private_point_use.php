<?php
// Подключаем объявление класса
require_once('private_point.php');

// Объявляем объект класса PrivatePoint
$point = new PrivatePoint;

// Присваиваем значения переменным объекта
$point->x = 3;
$point->y = 1; // $point->y = 1; // Fatal error: Uncaught Error: Cannot access
