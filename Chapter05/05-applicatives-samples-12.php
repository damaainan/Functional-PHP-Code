<?php
require_once('05-applicative-5.php');
require '../vendor/autoload.php';
use function Functional\group;

function limit_size($image) { return $image; }
function thumbnail($image) { return $image.'_tn'; }
function mobile($image) { return $image.'_small'; }

$images = CollectionApplicative::pure(['one', 'two', 'three']);

$process = CollectionApplicative::pure([
  'limit_size', 'thumbnail', 'mobile'
]);

$transformed = group($process->apply($images), function($image, $index) {
    return $index % 3;
});
print_r($transformed);
// Array
// (
//     [0] => Array
//         (
//             [0] => one
//             [3] => one_tn
//             [6] => one_small
//         )
//
//     [1] => Array
//         (
//             [1] => two
//             [4] => two_tn
//             [7] => two_small
//         )
//
//     [2] => Array
//         (
//             [2] => three
//             [5] => three_tn
//             [8] => three_small
//         )
//
// )


