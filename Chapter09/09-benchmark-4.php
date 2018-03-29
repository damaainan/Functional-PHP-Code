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
benchmark('add4', [10], 14);
// mean: 0.434 seconds
// std:  0.001 seconds

benchmark($composedAdd4, [10], 14);
// mean: 1.362 seconds
// std:  0.005 seconds

benchmark($composerCurryedAdd, [10], 14);
// mean: 3.555 seconds
// std:  0.018 seconds



