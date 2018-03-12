<?php

function throw_exception()
{
    throw new Exception('Message');
}

function some_function($x)
{
    $y = throw_exception();
    try {
        $z = $x + $y;
    } catch(Exception $e) {
        $z = 42;
    }

    return $z;
}

echo some_function(42);
// PHP Warning: Uncaught Exception: Message



