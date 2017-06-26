 <?php
require_once('connect_db.php');

// Выполняем запрос
$query = 'SELECT VERSION() AS version';
$ver = $pdo->query($query);

// Извлекаем результат
$version = $ver->fetch();
echo $version['version'];
// PostgreSQL 9.6.2 on x86_64-apple-darwin15.6.0, compiled by Apple LLVM version 8.0.0 (clang-800.0.42.1), 64-bit
