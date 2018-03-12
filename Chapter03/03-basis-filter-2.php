<?php

$filtered = array_filter(["one", "two", "", "three", ""]);
/* $filtered contains ["one", "two", "three"] */
var_dump($filtered);
$filtered = array_filter([0, 1, null, 2, [], 3, 0.0]);
/* $filtered contains [1, 2, 3] */



var_dump($filtered);