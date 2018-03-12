<?php

$numbers = [1, 2, 3, 4];
$english = ['one', 'two', 'three', 'four'];
$french = ['un', 'deux', 'trois', 'quatre'];

function translate(int $n, string $e, string $f): string
{
    return "$n is $e, or $f in French.";
}

print_r(array_map('translate', $numbers, $english, $french));



// Array
// (
//     [0] => 1 is one, or un in French.
//     [1] => 2 is two, or deux in French.
//     [2] => 3 is three, or trois in French.
//     [3] => 4 is four, or quatre in French.
// )

