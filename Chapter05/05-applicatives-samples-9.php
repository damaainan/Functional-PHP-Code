<?php
require_once('05-applicative-4.php');
print_r(check_applicative_laws(
    IdentityApplicative::pure('strtoupper'),
    'trim',
    ' Hello World! '
));
// Array
// (
//     [identity] => 1
//     [homomorphism] => 1
//     [interchange] => 1
//     [composition] => 1
//     [map] => 1
// )



