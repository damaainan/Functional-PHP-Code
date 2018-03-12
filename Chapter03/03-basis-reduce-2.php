<?php

function in_array2(string $needle, array $haystack): bool
{
    $search = function(bool $contains, string $i) use ($needle) : bool {
          return $needle == $i ? true : $contains;
    };
    return array_reduce($haystack, $search, false);
}

var_dump(in_array2('two', ['one', 'two', 'three']));
// bool(true)



