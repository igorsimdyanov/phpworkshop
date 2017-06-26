<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$handler = new StreamHandler('app.log', Logger::WARNING);
$log->pushHandler($handler);
$log->addWarning('Предупреждение');
