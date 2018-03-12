<?php
require_once __DIR__.'/../vendor/autoload.php';

use function Functional\compose;
$titles = ['Firefly', 'Buffy the Vampire Slayer', 'Stargate Atlantis'];

$titles2 = array_map(function(string $s) {
    return strtoupper(htmlspecialchars($s));;
}, $titles);
print_r($titles2);
$titles3 = array_map(compose('htmlspecialchars', 'strtoupper'), $titles);

print_r($titles3);

