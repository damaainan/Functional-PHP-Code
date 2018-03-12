<?php

function test_callable(callable $callback) : callable {
    $callback();
    return function() {
        // [...]
    };
}



