<?php

function while_iterative()
{
    $result = 1;
    while($result < 50) {
        $result = $result * 2;
    }

    return $result;
}

function while_recursive($result = 1, $continue = true)
{
    if($continue === false) {
        return $result;
    }

    return while_recursive($result * 2, $result < 50);
}



