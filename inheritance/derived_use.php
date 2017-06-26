<?php
require_once 'derived.php';

$obj = new Derived;

$obj->first = 3;
$obj->second = 5;

$obj->printFirst(); // 3
echo '<br />';
$obj->printSecond(); // 5
