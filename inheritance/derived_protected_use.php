<?php
require_once 'derived_protected.php';

$obj = new derived(20);
// echo $obj->var; // Ошибка
echo '<pre>';
print_r($obj);
echo '</pre>';
