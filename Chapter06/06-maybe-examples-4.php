<?php

var_dump(just('john.doe')->bind('getUser'));
// object(Monad\Maybe\Just)#6 (1) {
//     ["value":protected]=> string(8) "John Doe"
// }

var_dump(just('jane.doe')->bind('getUser'));
// object(Monad\Maybe\Nothing)#8 (0) { }


