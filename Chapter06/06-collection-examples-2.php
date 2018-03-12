<?php

$a = Collection::of([1, 2, 3])->bind(function($x) {
    return [$x, -$x];
});
print_r($a->extract());
// Array (
//     [0] => 1
//     [1] => -1
//     [2] => 2
//     [3] => -2
//     [4] => 3
//     [5] => -3
// )

$b = $a->bind(function($y) {
    return $y > 0 ? [$y * 2, $y / 2] : $y;
});
print_r($b->extract());
// Array (
//     [0] => 2
//     [1] => 0.5
//     [2] => -1
//     [3] => 4
//     [4] => 1
//     [5] => -2
//     [6] => 6
//     [7] => 1.5
//     [8] => -3
// )



