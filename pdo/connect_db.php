<?php
try {
    $pdo = new PDO('pgsql:host=localhost;dbname=catalog', 'i.simdyanov', '');
} catch (PDOException $e) {
    echo 'Невозможно установить соединение с базой данных';
}
