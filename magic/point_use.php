<?php
require_once 'point.php';

// $obj = new Point(); // Fatal error: Uncaught ArgumentCountError
$obj = new Point(10, 20);
echo $obj->getX().' '.$obj->getY(); // 10 20
