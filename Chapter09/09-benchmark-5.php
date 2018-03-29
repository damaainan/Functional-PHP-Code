<?php
require "../vendor/autoload.php";

require_once('09-performance-2.php');
use Oefenweb\Statistics\Statistics;

function benchmark($function, $params, $expected)
{
    $iteration   = 10;
    $computation = 2000000;

    $times = array_map(function() use($computation, $function, $params, $expected) {
        $start = microtime(true);

        array_reduce(range(0, $computation), function($expected) use ($function, $params) {
            if(($res = call_user_func_array($function, $params)) !== $expected) {
                throw new RuntimeException("Faulty computation");
            }
            return $expected;
        }, $expected);

        echo '.';
        return microtime(true) - $start;
    }, range(0, $iteration));

    echo sprintf("mean: %02.3f seconds\n", Statistics::mean($times));
    echo sprintf("std:  %02.3f seconds\n", Statistics::standardDeviation($times));
}
benchmark([new Adder, 'add'], [new Integer(21), new Integer(33)], 54);
// mean: 0.767 seconds
// std:  0.019 seconds


// ...........
// mean: 32.806 seconds
// std:  10.034 seconds