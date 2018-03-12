<?php

define('FOO', 'something');
const BAR = 42;

// this only works since PHP 5.6
const BAZ = ['one', 'two', 'three'];

// the 'define' syntax for array work since PHP 7
define('BAZ7', ['one', 'two', 'three']);

// names starting and ending with underscores are discouraged
define('__FOO__', 'possible clash');



