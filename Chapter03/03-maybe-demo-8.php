<?php

$num = Maybe::fromValue(42);

$val = $num->map(function($n) { return $n * 2; })
         ->filter(function($n) { return $n < 80; })
         ->map(function($n) { return $n + 10; })
         ->orElse(Maybe::fromValue(99))
         ->map(function($n) { return $n / 3; })
         ->getOrElse(0);
echo $val;
// 33


