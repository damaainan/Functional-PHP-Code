<?php
require_once('05-monoid.php');
class Any extends Monoid
{
    public static function id() { return false; }
    public static function op($a, $b) { return $a || $b; }
}

class All extends Monoid
{
    public static function id() { return true; }
    public static function op($a, $b) { return $a && $b; }
}

print_r(check_monoid_laws(new Any(), true, false, true));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )

print_r(check_monoid_laws(new All(), true, false, true));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )



