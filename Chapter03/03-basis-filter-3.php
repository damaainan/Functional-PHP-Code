<?php

$data = [];

function key_only($key)
{
    // [...]
}

$filtered = array_filter($data, 'key_only', ARRAY_FILTER_USE_KEY);
var_dump($filtered);
function both($value, $key)
{
    // [...]
}

$filtered = array_filter($data, 'both', ARRAY_FILTER_USE_BOTH);

var_dump($filtered);
