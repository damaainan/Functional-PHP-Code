<?php
require_once('../Chapter04/04-curry.php');
require_once('05-functor.php');

$add = curry(function(int $a, int $b) { return $a + $b; });

$id = new IdentityFunctor(5);
$hum = $id->map($add);

echo get_class($hum->get());
// Closure
$result = $hum->map(function(callable $f) {
    return $f(10);
});
echo $result->get();
// 15
