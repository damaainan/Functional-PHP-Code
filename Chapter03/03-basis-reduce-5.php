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
  return array_reduce($data, function(array $acc, $i) use ($predicate) {
      if($predicate($i)) {
          $acc[] = $i;
      }
      return $acc;
  }, []);
}


