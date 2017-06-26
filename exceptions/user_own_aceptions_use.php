<?php
require_once 'user_own_exceptions.php';

try {
    $user = new User(
        'igorsimdyanov@gmail.com',
        'password',
        'Игорь',
        'Симдянов');

    echo $user->password;
}
catch(Exception $exp)
{
    // Блок обработки исключительной ситуации
    echo "Исключение: {$exp->getMessage()}<br />";
    echo "в файле {$exp->getFile()}<br />";
    echo "в строке {$exp->getLine()}<br />";
    echo "<pre>";
    echo $exp->getTraceAsString();
    echo "</pre>";
}
