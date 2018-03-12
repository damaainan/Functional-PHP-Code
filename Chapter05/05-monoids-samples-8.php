<?php
require_once('05-monoid.php');
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
print_r(check_monoid_laws(new IntSum(), 5, 10, 20));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )

print_r(check_monoid_laws(new IntProduct(), 5, 10, 20));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )

print_r(check_monoid_laws(new StringConcat(), "Hello ", "World", "!"));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )

print_r(check_monoid_laws(new ArrayMerge(), [1, 2, 3], [4, 5], [10]));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )



