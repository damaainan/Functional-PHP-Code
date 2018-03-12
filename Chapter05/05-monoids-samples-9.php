<?php
require_once('05-monoid.php');
class IntSubtraction extends Monoid
{
    public static function id() { return 0; }
    public static function op($a, $b) { return $a - $b; }
}

print_r(check_monoid_laws(new IntSubtraction(), 5, 10, 20));
// Array
// (
//     [left identity] =>
//     [right identity] => 1
//     [associativity] =>
// )



