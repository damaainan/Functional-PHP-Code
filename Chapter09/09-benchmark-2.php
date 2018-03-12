<?php

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



