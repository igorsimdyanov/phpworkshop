<?php
require_once 'accessor.php';

$obj = new Accessor();

$obj->name = 'Hello, world!<br />';
echo $obj->name;

echo "<pre>";
print_r($obj);
echo "</pre>";
