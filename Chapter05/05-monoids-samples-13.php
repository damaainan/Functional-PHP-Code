<?php
require_once('05-monoid.php');
require '../vendor/autoload.php';

class IntSum extends Monoid
{
    public static function id() { return 0; }
    public static function op($a, $b) { return $a + $b; }
}
class IntProduct extends Monoid
{
    public static function id() { return 1; }
    public static function op($a, $b) { return $a * $b; }
}
class StringConcat extends Monoid
{
    public static function id() { return ''; }
    public static function op($a, $b) { return $a.$b; }
}

class ArrayMerge extends Monoid
{
    public static function id() { return []; }
    public static function op($a, $b) { return array_merge($a, $b); }
}

use function Functional\compose;

$add = new IntSum();
$times = new IntProduct();

$composed = compose($add(5), $times(2));
echo $composed(2);
// 14


