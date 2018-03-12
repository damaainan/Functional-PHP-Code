<?php

const increment = 'increment';

function increment(int $i) { return $i + 1; }

// using a 'callable'
array_map([1, 2, 3, 4], 'increment');

// using our const
array_map([1, 2, 3, 4], increment);



