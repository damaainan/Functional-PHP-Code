<?php

const increment = 'increment';

function increment(int $i) { return $i + 1; }

// using a 'callable'
$arr = array_map('increment',[1, 2, 3, 4]);
print_r($arr);
// using our const
$arr = array_map(increment,[1, 2, 3, 4]);



print_r($arr);