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
echo Any::concat([true, false, true, false]) ? 'true' : 'false';
// true

echo All::concat([true, false, true, false]) ? 'true' : 'false';
// false



