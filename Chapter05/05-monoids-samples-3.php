<?php
require_once('05-monoid.php');
$a = 10; $b = 20; $c = 30;
var_dump($a * 1 === $a);
// bool(true)
var_dump(1 * $a === $a);
// bool(true)
var_dump(($a * $b) * $c === $a * ($b * $c));
// bool(true)



