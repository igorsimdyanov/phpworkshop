<?php
spl_autoload_register();

$obj = new \SelfPhp\Article(
    'Заголовок',
    'Содержиомое');

$obj->setAuthor(['Максим Кузнецов', 'Игорь Симдянов']);
$obj->seo('SEO-заголовок');
echo $obj->title(); // SEO-заголовок
