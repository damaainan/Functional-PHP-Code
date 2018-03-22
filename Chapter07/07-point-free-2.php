<?php

require "../vendor/autoload.php";
use function Functional\compose; //
// traditional
function safe_title(string $s)
{
    return strtoupper(htmlspecialchars($s));
}

// point-free
$safe_title = compose('htmlspecialchars', 'strtoupper');

var_dump($safe_title);
