<?php

function max3(array $data)
{
    if(empty($data)) {
        trigger_error('max3(): Array must contain at least one element', E_USER_WARNING);
        return false;
    }

    return array_reduce($data, function(int $max, int $i) : int {
        return $i > $max ? $i : $max;
    }, 0);
}



