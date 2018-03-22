<?php

function map(array $data, callable $cb): array
{
    return array_reduce($data, function(array $acc, $i) use ($cb) {
        $acc[] = $cb($i);
        return $acc;
    }, []);
}

function filter(array $data, callable $predicate): array
{
  return array_reduce($data, function(array $acc, $i) use ($predicate) { // predicate 预处理函数
      if($predicate($i)) {
          $acc[] = $i;
      }
      return $acc;
  }, []);
}


function add(int $a, int $b = 10): int
{
    return $a + $b;
}
print_r(map([1, 2], 'add')); // 回调函数放在了后面 

function odd(int $a): bool
{
    return $a % 2 === 1;
}

$filtered = filter([1, 2, 3, 4, 5, 6], 'odd');
var_dump($filtered);