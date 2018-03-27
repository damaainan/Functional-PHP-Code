<?php
require "../vendor/autoload.php";
use FunctionalPHP\Trampoline as t; 

function factorial($n, $acc = 1) {
    return $n <= 1 ? $acc : t\bounce('factorial', $n - 1, $n * $acc);
};
$fact = t\trampoline_wrapper('factorial');

echo $fact(5);
// 120



