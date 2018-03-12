<?php

function max3(array $data): int
{
    return array_reduce($data, 'max', 0);
}



