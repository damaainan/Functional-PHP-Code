<?php

function max2(array $data): int
{
    return array_reduce($data, function(int $max, int $i) : int {
        return $i > $max ? $i : $max;
    }, 0);
}

echo max2([5, 10, 23, 1, 0]);
// 23



