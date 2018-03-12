<?php

function fact2($n)
{
    $fact = function($n, $acc) use (&$fact) {
        return $n <= 1 ? $acc : $fact($n - 1, $n * $acc);
    };

    return $fact($n, 1);
}



