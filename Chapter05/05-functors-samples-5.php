<?php
require_once('../Chapter03/03-maybe-final-1.php');
$just = Maybe::just(10);
$nothing = Maybe::nothing();
function id($value)
{
    return $value;
}
var_dump($just->map('id') == id($just));
// bool(true)

var_dump($nothing->map('id') === id($nothing));
// bool(true)



