<?php

function fact($n)
{
    return $n <= 1 ? 1 : $n * fact($n - 1);
}

$ret = fact(5);
echo $ret;

