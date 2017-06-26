<?php
require_once 'constructor_call.php';

$obj = new Constructor(); // Вызов конструктора
$obj->__construct();      // Вызов конструктора
$obj->inner();            // Вызов конструктора
