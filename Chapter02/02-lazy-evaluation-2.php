<?php
function wait(int $value): int
{
    // let's imagine this is a function taking a while
    // to compute a value
    sleep(1);
    return $value;
}
// 'wait' will never get called as those operators are short-circuit
$a = (false && wait(10));
var_dump($a);
$b = (true  || wait(10));
var_dump($b);
$c = (false and wait(10));
var_dump($c);
$d = (true  or  wait(10));
var_dump($d);



