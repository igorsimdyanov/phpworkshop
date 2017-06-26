<?php
require_once 'namespaces_alt.php';

use SelfPhp\constants;
use SelfPhp\functions;
use SelfPhp\classes\User;

$user = new User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo 'Версия ' . constants\VERSION . '<br />';
functions\debug($user);
