<?php

function substr_curryied(string $s)
{
    return function(int $start) use($s) {
        return function(int $length) use($s, $start) {
            return substr($s, $start, $length);
        };
    };
}

$f = substr_curryied('Lorem ipsum dolor sit amet.');
$g = $f(0);
echo $g(5);
// Lorem



