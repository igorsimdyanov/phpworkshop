<?php
require_once(__DIR__ . "/SelfPhp/Author.php");
require_once(__DIR__ . "/SelfPhp/Seo.php");
require_once(__DIR__ . "/SelfPhp/Article.php");

$obj = new \SelfPhp\Article(
    'Заголовок',
    'Содержиомое');

$obj->setAuthor(['Максим Кузнецов', 'Игорь Симдянов']);
$obj->seo('SEO-заголовок');
echo $obj->title(); // SEO-заголовок
