<?php

require_once('06-monadic_helpers.php');
require '../vendor/autoload.php';
use Monad\Collection; // collection 类不存在 需要想办法替换
use Functional as f;

$powerset = filterM(function($x) {
    return Collection::of([true, false]);
}, [1, 2, 3]);

print_r($powerset->extract());
// Array (
//     [0] => Array ( [0] => 1 [1] => 2 [2] => 3 )
//     [1] => Array ( [0] => 1 [1] => 2 )
//     [2] => Array ( [0] => 1 [1] => 3 )
//     [3] => Array ( [0] => 1 )
//     [4] => Array ( [0] => 2 [1] => 3 )
//     [5] => Array ( [0] => 2 )
//     [6] => Array ( [0] => 3 )
//     [7] => Array ( )
// )



