<?php

function max3(array $data): int
{
    return array_reduce($data, 'max', 0);
}


echo max3([5, 10, 23, 1, 0]);
