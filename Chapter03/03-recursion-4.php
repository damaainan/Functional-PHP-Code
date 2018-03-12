<?php

function for_iterative()
{
    $result = 5;

    for($i = 1; $i < 10; ++$i) {
        $result = $result * $i;
    }

    return $result;
}

function for_recursive($result = 5, $i = 1)
{
    if($i >= 10) {
        return $result;
    }

    return for_recursive($result * $i, $i + 1);
}



