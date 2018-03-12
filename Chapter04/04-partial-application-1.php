<?php

function excerpt(string $s)
{
    return substr($s, 0, 5);
}

echo excerpt('Lorem ipsum dolor si amet.');
// Lorem



