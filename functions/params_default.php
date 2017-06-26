<?php
function getSum($left = 10, $right = 5)
{
    $sum = $left + $right;
    return $sum;
}
echo getSum();     // выводит 15
echo getSum(5);    // выводит 10
echo getSum(5, 0); // выводит 5
