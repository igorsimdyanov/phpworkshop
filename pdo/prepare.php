<?php
require_once('connect.php');

try {
    $query = 'SELECT
                first_name,
                last_name
              FROM
                users
              WHERE
                first_name = :name';
    $usr = $pdo->prepare($query);
    $usr->execute(['name' => 'Игорь']);
    $user = $usr->fetch(PDO::FETCH_NUM);
    if ($user) {
        echo implode(' ', $user); // Игорь Симдянов
    }
} catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}
