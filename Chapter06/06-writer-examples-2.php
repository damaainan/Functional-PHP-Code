<?php

$data = [1, 10, 15, 20, 25];

$filter = function($i) {
    if ($i % 2 == 1) {
        return new Writer(false, "Reject odd number $i.\n");
    } else if($i > 15) {
      return new Writer(false, "Reject $i because it is bigger than 15\n");
    }

    return new Writer(true);
};

list($result, $log) = filterM($filter, $data)->runWriter();

var_dump($result);
// array(1) {
//   [0]=> int(10)
// }

echo $log->get();
// Reject odd number 1.
// Reject odd number 15.
// Reject 20 because it is bigger than 15
// Reject odd number 25.



