<?php

function safe_title(string $s)
{
    $safe = htmlspecialchars($s);
    return strtoupper($safe);
}



