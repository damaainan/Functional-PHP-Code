<?php
require "../vendor/autoload.php";
use FunctionalPHP\PatternMatching as m;


$fact = m\func([
    '0' => 1,
    'n' => function($n) use(&$fact) {
        return $n * $fact($n - 1);
    }
]);

echo $fact(5);
