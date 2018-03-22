<?php
require '../vendor/autoload.php';

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Functional as f;

function getUser($username): Maybe {
  return $username == 'john.doe' ? m\just('John Doe') : m\nothing();
}

var_dump( just('john.doe')->map('getUser'));
// object(Monad\Maybe\Just)#7 (1) {
//     ["value":protected]=> object(Monad\Maybe\Just)#6 (1) {
//         ["value":protected]=> string(8) "John Doe"
//     }
// }

var_dump(just('jane.doe')->map('getUser'));
// object(Monad\Maybe\Just)#8 (1) {
//     ["value":protected]=> object(Monad\Maybe\Nothing)#6 (0) { }
// }



