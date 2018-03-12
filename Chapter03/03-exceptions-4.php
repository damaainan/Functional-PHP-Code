<?php

class B {}

$a = new B();

try {
    $a->invalid_method();
} catch(Error $e) {
    echo "An error occured : ".$e->getMessage();
}
// An error occured : Call to undefined method B::invalid_method()




