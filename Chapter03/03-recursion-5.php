<?php

function for_with_helper()
{
    $helper = function($result = 5, $i = 1) use(&$helper) {
        if($i >= 10) {
            return $result;
        }

        return $helper($result * $i, $i + 1);
    };

    return $helper();
}


