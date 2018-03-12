<?php

require_once __DIR__.'/../vendor/autoload.php';

use function Functional\compose;

$safe_title2 = compose('htmlspecialchars', 'strtoupper');

print_r($safe_title2);

