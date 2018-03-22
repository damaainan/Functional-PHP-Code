<?php
require '../vendor/autoload.php';

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Functional as f;

$just = m\just(10);
$nothing = m\nothing();

$just = m\maybeNull(10);
$nothing = m\maybeNull(null);

$str = m\pure("Hi");

// var_dump(m\maybe('Hi!'));

// echo maybe('Hello.', 'strtoupper', m\maybe('Hi!')); // 最外层 maybe 函数 未定义
// echo m\maybe('Hello.', 'strtoupper', m\maybe('Hi!')); 
echo m\maybe('Hello.', 'strtoupper', $str); 
// HI!

// echo m\maybe('Hello.', 'strtoupper', m\nothing());
echo m\maybe('Hello.', 'strtoupper', $nothing);
// HELLO.



