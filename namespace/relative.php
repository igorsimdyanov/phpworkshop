<?php
namespace SelfPhp;

require_once 'namespaces_alt.php';

$user = new classes\User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo 'Версия ' . constants\VERSION . '<br />';
functions\debug($user);
