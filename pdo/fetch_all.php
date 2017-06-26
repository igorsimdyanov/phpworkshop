<?php
require_once('connect.php');

try {
    $query = 'SELECT * FROM users';
    $usr = $pdo->query($query);

    $users = $usr->fetchAll();
    foreach($users as $user) {
        echo $user['first_name'] . ' ' . $user['last_name'] . '<br />';
    }
} catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}
