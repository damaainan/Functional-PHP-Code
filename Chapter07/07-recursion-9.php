<?php

function fact4($n, $acc = 1)
{
    return $n <= 1 ? $acc : new Bounce('fact4', $n - 1, $n * $acc);
}

echo trampoline('fact4', 5)
// 120



