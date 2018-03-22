<?php
// 组合
function safe_title(string $s)
{
    $safe = htmlspecialchars($s);
    return strtoupper($safe);
}

function safe_title2(string $s)
{
    return strtoupper(htmlspecialchars($s));
}



