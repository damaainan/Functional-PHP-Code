<?php

function safe_title2(string $s)
{
    return strtoupper(htmlspecialchars($s));
}



