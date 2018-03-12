<?php

print_r(array_map(null, [1, 2], ['one', 'two'], ['un', 'deux']));



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
// )

