<?php
namespace SelfPhp;

function strlen($str)
{
  return count(str_split($str));
}

// Это SelfPhp\strlen
echo \SelfPhp\strlen('Hello world!') . '<br />';
echo strlen('Hello world!') . '<br />';
echo namespace\strlen('Hello world!') . '<br />';
