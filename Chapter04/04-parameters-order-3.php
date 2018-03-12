<?php
require_once('04-curry-2.php');
$map = curry_n(2, 'array_map');
$filter = curry_n(2, 'array_filter');
$trim = $map('trim');
$hash = $map('sha1');

$oddNumbers = $filter([1, 3, 5, 7]);
$vowels = $filter(['a', 'e', 'i', 'o', 'u']);

print_r($oddNumbers);
print_r($vowels);

