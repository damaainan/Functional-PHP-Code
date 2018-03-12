<?php

require_once __DIR__.'/../vendor/autoload.php';

use function Functional\map;

var_dump(map(range(0, 4), function($v) { return $v * 2; }));

use Functional as F;

var_dump(F\map(range(0, 4), function($v) { return $v * 2; }));


