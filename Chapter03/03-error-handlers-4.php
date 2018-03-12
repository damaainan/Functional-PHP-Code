<?php

function max4(array $data, int $default = 0): int
{
    return empty($data) ? $default :
      array_reduce($data, function(int $max, int $i) : int {
          return $i > $max ? $i : $max;
      }, 0);
}



