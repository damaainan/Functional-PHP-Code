<?php
require_once('05-applicative-5.php');

print_r(iterator_to_array(CollectionApplicative::pure([
  function($a) { return $a * 2; },
  function($a) { return $a + 10; }
])->apply(CollectionApplicative::pure([1, 2, 3]))));
// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 11
//     [4] => 12
//     [5] => 13
// )




