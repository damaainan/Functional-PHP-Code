<?php

  function add(int $a, int $b = 10): int
  {
      return $a + $b;
  }

  print_r(array_map('add', ['one' => 1, 'two' => 2]));
  print_r(array_map('add', [1, 2], [20, 30]));


// Array
// (
//     [one] => 11
//     [two] => 12
// )
// Array
// (
//     [0] => 21
//     [1] => 32
// )
