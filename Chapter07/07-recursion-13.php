<?php

$fact = T\pool(function($n, $acc = 1) {
    return $n <= 1 ? $acc : $this($n - 1, $n * $acc);
});

echo $fact(5);
// 120


