<?php

$numerals = [1, 2, 3, 4];
$english = ['one', 'two'];
$french = ['un', 'deux', 'trois'];

print_r(array_map(null, $numerals, $english, $french));



// Array
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => one
//             [2] => un
//         )
//     [1] => Array
//         (
//             [0] => 2
//             [1] => two
//             [2] => deux
//         )
//     [2] => Array
//         (
//             [0] => 3
//             [1] =>
//             [2] => trois
//         )
//     [3] => Array
//         (
//             [0] => 4
//             [1] =>
//             [2] =>
//         )
// )

