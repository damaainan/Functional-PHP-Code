<?php
$add = function(float $a, float $b): float {
    return $a + $b;
};
$add(5.0, 10.0);
var_dump($add);


$sum = array_reduce([1.0, 2.0, 3.0, 4.0, 5.0], $add);

var_dump($sum);

