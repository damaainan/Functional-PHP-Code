<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once('04-curry.php');
use function Functional\partial_right;


$map = curry(function(callable $cb, array $array) {});
$take = curry(function(int $count, string $string) {});



$firstTwo = partial_right($map, partial_right($take, 2));


var_dump($firstTwo);