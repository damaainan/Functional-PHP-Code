<?php

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Functional as f;

$just = m\just(10);
$nothing = m\nothing();

$just = m\maybeNull(10);
$nothing = m\maybeNull(null);

echo maybe('Hello.', 'strtoupper', m\maybe('Hi!'));
// HI!

echo maybe('Hello.', 'strtoupper', m\nothing());
// HELLO.



