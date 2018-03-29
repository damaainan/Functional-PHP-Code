<?php
require "../vendor/autoload.php";

require_once('09-performance-1.php');
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

        return microtime(true) - $start;
    }, range(0, $iteration));

    echo sprintf("mean: %02.3f seconds\n", Statistics::mean($times));
    echo sprintf("std:  %02.3f seconds\n", Statistics::standardDeviation($times));
}


benchmark('add', [21, 33], 54);
// mean: 0.447 seconds
// std:  0.015 seconds

// mean: 40.732 seconds
// std:  9.870 seconds

benchmark('manualCurryAdd', [21, 33], 54);
// mean: 1.210 seconds
// std:  0.016 seconds

// mean: 76.848 seconds
// std:  9.412 seconds

benchmark($curryiedAdd, [21, 33], 54);
// mean: 1.476 seconds
// std:  0.007 seconds

// mean: 82.793 seconds
// std:  15.812 seconds


