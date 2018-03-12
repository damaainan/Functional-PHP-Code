<?php
require_once('05-monoid.php');
$s1 = "Hello"; $s2 = " World"; $s3 = "!";

var_dump($s1 . '' === $s1);
// bool(true)
var_dump('' . $s1 === $s1);
// bool(true)
var_dump(($s1 . $s2) . $s3 == $s1 . ($s2 . $s3));
// bool(true)



