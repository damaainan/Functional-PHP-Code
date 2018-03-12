<?php
require_once('04-curry-2.php');
$map = curry(function(callable $cb, array $array) {});
$take = curry(function(int $count, string $string) {});

$firstTwo = $map($take(2));


