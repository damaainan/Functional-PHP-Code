<?php
function substr_curryied(string $s)
{
    return function(int $start) use($s) {
        return function(int $length) use($s, $start) {
            return substr($s, $start, $length);
        };
    };
}
echo substr_curryied('Lorem ipsum dolor sit amet.')(0)(5);
// Lorem



