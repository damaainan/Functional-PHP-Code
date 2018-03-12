<?php
require_once __DIR__.'/../vendor/autoload.php';

use function Functional\compose;
$titles = ['Firefly', 'Buffy the Vampire Slayer', ' Stargate Atlantis '];
$titles4 = array_map(compose('htmlspecialchars', 'strtoupper', 'trim'), $titles);
print_r($titles4);


