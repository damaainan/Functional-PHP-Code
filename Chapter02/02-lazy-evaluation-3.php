<?php
function wait(int $value): int
{
    // let's imagine this is a function taking a while
    // to compute a value
    sleep(1);
    return $value;
}
$a = (false && wait(10));
$v = ($a && wait(10)) || wait(8);

echo $v;

