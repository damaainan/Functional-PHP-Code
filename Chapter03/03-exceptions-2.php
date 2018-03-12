<?php

try {
    $z = $x + throw_exception();
} catch(Exception $e) {
    $z = 42;
}



