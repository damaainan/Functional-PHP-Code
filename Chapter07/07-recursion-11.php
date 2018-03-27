<?php
require "../vendor/autoload.php";
use FunctionalPHP\Trampoline as t; 

function factorial($n, $acc = 1) {
    return $n <= 1 ? $acc : t\bounce('factorial', $n - 1, $n * $acc);
};

echo t\trampoline('factorial', 5);
// 120

use FunctionalPHP\Trampoline\Trampoline;

echo Trampoline::factorial(5);
// 120

echo Trampoline::strtoupper('Hello!');
// HELLO!



