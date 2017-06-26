<?php
require_once('destructor.php');

$obj = new Destructor(); // Вызов конструктора
throw new Exception;     // Fatal error: Uncaught exception 'Exception'
print_r($obj);           // Эта точка никогда не достигается
