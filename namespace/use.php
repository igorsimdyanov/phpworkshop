<?php
require_once 'namespaces_alt.php';

use SelfPhp\constants as constants;
use SelfPhp\functions as functions;
use SelfPhp\classes\User as User;

$user = new User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo 'Версия ' . constants\VERSION . '<br />';
functions\debug($user);
