<?php
require_once 'derived_private.php';

$obj = new Derived(20);
echo $obj->getVar(); // null
echo '<pre>';
print_r($obj);
echo '</pre>';
