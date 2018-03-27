<?php
require "../vendor/autoload.php";
use FunctionalPHP\Trampoline as t; 

$fact = t\pool(function($n, $acc = 1) {
    return $n <= 1 ? $acc : $this($n - 1, $n * $acc);
});

echo $fact(5);
// 120


