<?php

function square(int $x): int
{
    return $x * $x;
}

$squared = array_map('square', [1, 2, 3, 4]);
/* $squared contains [1, 4, 9, 16] */

var_dump($squared);

