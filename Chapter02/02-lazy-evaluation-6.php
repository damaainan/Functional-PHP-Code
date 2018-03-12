<?php

$array = [1, 2, 3, 4, 5, 6 /* ... */];

// version 1
for($i = 0; $i < count($array); ++$i) {
    // do something with the array values
}

// version 2
$length = count($array);
for($i = 0; $i < $length; ++$i) {
    // do something with the array values
}



