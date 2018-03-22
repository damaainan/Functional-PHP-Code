<?php
require_once('04-curry.php');
$map = curry(function(callable $cb, array $array) {});
$take = curry(function(int $count, string $string) {});

$firstTwo = $map($take(2));


