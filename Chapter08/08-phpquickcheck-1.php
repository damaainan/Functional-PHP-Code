<?php
require "../vendor/autoload.php";
use QCheck\Generator;
use QCheck\Quick;

$singleElement = Quick::check(1000, Generator::forAll(
    [Generator::ints()],
    function($i) {
        return array_reverse([$i]) == [$i];
    }
), ['echo' => true]);
print_r($singleElement);

$inverse = Quick::check(10, Generator::forAll(
    [Generator::ints()->intoArrays()],
    function($array) {
        return array_reverse(array_reverse($array)) == $array;
    }
), ['echo' => true]);
print_r($inverse);

$merge = Quick::check(10, Generator::forAll(
    [Generator::ints()->intoArrays(), Generator::ints()->intoArrays()],
    function($x, $y) {
        return
            array_reverse(array_merge($x, $y)) ==
            array_merge(array_reverse($y), array_reverse($x));
    }
), ['echo' => true]);

print_r($merge);

