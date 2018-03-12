<?php
function id($value)
{
    return $value;
}
$data = [1, 2, 3, 4];

var_dump(array_map('id', $data) === id($data));
// bool(true)



