<?php
require_once('connect.php');

$query = 'SELECT * FROM users';
$usr = $pdo->query($query);

try {
    while($user = $usr->fetch()) {
        echo $user['first_name'] . ' ' . $user['last_name'] . '<br />';
    }
} catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}
