<?php

// let's assume we have some big array of data
$array = ['one', 'two', 'three', '...'];

$filtered = array_filter($array, function($i) { /* [...] */ });
var_dump($filtered);
$beginning = array_slice($array, 0, 10);
var_dump($beginning);
$final = array_map(function($i) { /* [...] */ }, $array);
var_dump($final);


