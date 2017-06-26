<?php
function __autoload($classname)
{
    $classname = str_replace('\\', '/', $classname);
    require_once(__DIR__ . "/$classname.php");
}

$obj = new \SelfPhp\Article(
    'Заголовок',
    'Содержиомое');

$obj->setAuthor(['Максим Кузнецов', 'Игорь Симдянов']);
$obj->seo('SEO-заголовок');
echo $obj->title(); // SEO-заголовок
