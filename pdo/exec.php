<?php
require_once('connect_db.php');

$query = 'CREATE TABLE users (
            id SERIAL,
            first_name VARCHAR(40),
            last_name VARCHAR(40)
          )';
$count = $pdo->exec($query);
if ($count !== false)
    echo 'Таблица создана успешно';
else {
    echo 'Не удалось создать таблицу';
    echo '<pre>';
    print_r($pdo->errorInfo());
    echo '<pre>';
}
