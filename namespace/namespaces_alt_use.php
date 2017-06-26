<?php
require_once 'namespaces_alt.php';

$user = new SelfPhp\classes\User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo 'Версия ' . SelfPhp\constants\VERSION . '<br />';
SelfPhp\functions\debug($user);
