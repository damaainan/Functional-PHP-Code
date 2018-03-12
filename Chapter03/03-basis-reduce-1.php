<?php

function sum(int $carry, int $i): int
{
    return $carry + $i;
}

$summed = array_reduce([1, 2, 3, 4], 'sum', 0);
/* $summed contains 10 */


var_dump($summed);
