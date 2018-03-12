<?php
require_once('05-monoid.php');
$a = 10; $b = 20; $c = 30;
var_dump(($a - $b) - $c === $a - ($b - $c));
// bool(false)
var_dump(($a / $b) / $c === $a / ($b / $c));
// bool(false)



