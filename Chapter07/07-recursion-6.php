<?php

function fact3($n, $acc = 1)
{
    return $n <= 1 ? $acc : fact3($n - 1, $n * $acc);
}



