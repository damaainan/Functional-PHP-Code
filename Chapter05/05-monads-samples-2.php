<?php
require_once('05-monad.php');
print_r(check_monad_laws(
    10,
    IdentityMonad::return(20),
    function(int $a) { return IdentityMonad::return($a + 10); },
    function(int $a) { return IdentityMonad::return($a * 2); }
));
// Array
// (
//     [left identity] => 1
//     [right identity] => 1
//     [associativity] => 1
// )



