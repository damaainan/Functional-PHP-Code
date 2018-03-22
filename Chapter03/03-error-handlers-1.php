<?php

function max2(array $data): int
{
    return array_reduce($data, function(int $max, int $i) : int {
        return $i > $max ? $i : $max;
    }, 0);
}

print_r(max2([12,35,3,7,0,43]));

