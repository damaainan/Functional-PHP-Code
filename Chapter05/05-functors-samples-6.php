<?php
require_once('../Chapter03/03-maybe-final-1.php');
$just = Maybe::just(10);
$nothing = Maybe::nothing();


function add2($a)
{
    return $a + 2;
}

function times10($a)
{
    return $a * 10;
}

function composed($a) {
    return add2(times10($a));
}


var_dump($just->map('times10')->map('add2') == $just->map('composed'));
// bool(true)

var_dump($nothing->map('times10')->map('add2') === $nothing->map('composed'));
// bool(true)



