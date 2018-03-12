<?php

function odd(int $a): bool
{
    return $a % 2 === 1;
}

$filtered = array_filter([1, 2, 3, 4, 5, 6], 'odd');
var_dump($filtered);
/* $filtered contains [1, 3, 5] */



