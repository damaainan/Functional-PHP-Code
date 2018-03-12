<?php

$s = 'orange';

$my_closure = function() use($s) { echo $s; };

$my_closure(); // display 'orange'

$a = 'banana';

$my_closure(); // still display 'orange'



