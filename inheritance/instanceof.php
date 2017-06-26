<?php
require_once 'derived.php';

$obj = new Derived;

echo $obj instanceof Derived; // true
echo $obj instanceof Base;    // true
echo $obj instanceof Dir;     // false
