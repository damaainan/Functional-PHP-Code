<?php
require_once('05-applicative.php');

require_once('../Chapter04/04-curry.php');
require_once('05-functor.php');

$add = curry(function(int $a, int $b) { return $a + $b; });

$five = IdentityApplicative::pure(5);
$ten = IdentityApplicative::pure(10);
$applicative = IdentityApplicative::pure($add);

echo $applicative->apply($five)->apply($ten)->get();
// 15

$hello = IdentityApplicative::pure('Hello world!');

echo IdentityApplicative::pure('strtoupper')->apply($hello)->get();
// HELLO WORLD!

echo $hello->map('strtoupper')->get();
// HELLO WORLD!



