<?php

$add = function($a, $b) {
    return $a + $b;
};

$collection = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo Folder::fold($add, $collection, 0);
// 55


