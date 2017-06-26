<?php
namespace SelfPhp;

function strlen($str)
{
    return count(str_split($str));
}

// Это SelfPhp\strlen
echo strlen('Hello world!') . '<br />';

// Cтандартная функция strlen()
echo \strlen('Hello world!') . '<br />';
