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

$numbers = [1, 23, 45, 187, 12];
echo IntSum::concat($numbers);
// 268

$words = ['Hello ', ', ', 'my ', 'name is John.'];
echo StringConcat::concat($words);
// Hello , my name is John.

$arrays = [[1, 2, 3], ['one', 'two', 'three'], [true, false]];
print_r(ArrayMerge::concat($arrays));
// [1, 2, 3, 'one', 'two', 'three', true, false]



