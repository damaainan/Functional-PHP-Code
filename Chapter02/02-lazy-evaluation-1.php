<?php

function wait(int $value): int
{
    // let's imagine this is a function taking a while
    // to compute a value
    sleep(1);
    return $value;
}

function do_something(bool $a, int $b, int $c): int
{
    if($a) {
        return $b;
    } else {
        return $c;
    }
}

echo do_something(true, wait(10), wait(8));



