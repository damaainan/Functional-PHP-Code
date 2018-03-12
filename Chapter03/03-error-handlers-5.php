<?php

function max5(array $data, callable $onError): int
{
    return empty($data) ? $onError() :
      array_reduce($data, function(int $max, int $i) : int {
          return $i > $max ? $i : $max;
      }, 0);
}

max5([], function(): int {
    // You are free to do anything you want here.
    // Not really useful in such a simple case but
    // when creating complex objects it can prove invaluable.
    return 42;
});


