<?php

require '../vendor/autoload.php';
use Widmogrod\Monad\IO as IO;
use Widmogrod\Functional as f;
$readFromInput = f\mcompose(IO\putStrLn, IO\getLine, IO\putStrLn);
$readFromInput(Monad\Identity::of('Enter something and press <enter>'))->run();
// Enter something and press <enter>
// Hi!
// Hi!


