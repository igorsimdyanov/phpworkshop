<?php
require_once 'namespace.php';

$user = new SelfPhp\User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo 'Версия ' . SelfPhp\VERSION . '<br />';
SelfPhp\debug($user);
