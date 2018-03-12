<?php
require_once('05-monoid.php');
$v1 = [1, 2, 3]; $v2 = [5]; $v3 = [10];

var_dump(array_merge($v1, []) === $v1);
// bool(true)
var_dump(array_merge([], $v1) === $v1);
// bool(true)
var_dump(
  array_merge(array_merge($v1, $v2), $v3) ===
  array_merge($v1, array_merge($v2, $v3))
);
// bool(true)



