<?php
require_once('05-functor.php');
print_r(check_functor_laws(
    new IdentityFunctor(10),
    function($a) { return $a * 10; },
    function($a) { return $a + 2; }
));
// Array
// (
//     [identity] => 1
//     [composition] => 1
// )


