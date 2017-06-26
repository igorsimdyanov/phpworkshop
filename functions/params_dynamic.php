<?php
function funct($left, $middle, $right)
{
    echo "$left<br />";
    echo "$middle<br />";
    echo "$right<br>";
}
$i = 10;
funct(++$i, $i = $i * 2, --$i);
