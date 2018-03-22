<?php
require_once('04-curry.php');
$map = curry(function(array $array, callable $cb) {});
$take = curry(function(string $string, int $count) {});

$firstTwo = function(array $array) {
    return $map($array, function(string $s) {
        return $take($s, 2);
    });
};



