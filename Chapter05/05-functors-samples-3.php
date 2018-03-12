<?php

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
$data = [1, 2, 3, 4];
var_dump(
    array_map('add2', array_map('times10', $data)) ===
    array_map('composed', $data)
);
// bool(true)



