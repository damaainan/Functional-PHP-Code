<?php

// by name
$callback = 'strtoupper';
$callback('Hello World !');

class A {
    static function hello($name) { return "Hello $name !\n"; }
    function __invoke($name) { return self::hello($name); }
}

// array with class name and static method name
$callback = ['A', 'hello'];
$callback('World');

// string representing the class and method name
$callback = 'A::hello';
$callback('World');

$a = new A();

// array with instance and method name (static or not)
$callback = [$a, 'hello'];
$callback('World');

// object as a function
$callback = $a;
$callback('World');

// variable containing an anonymous function or closure
$callback = function(string $s)
{
    return "Hello $s !\n";
};
$callback('World');

// If you don't like calling the callback directly like
// above, you can also use `call_user_func_array` or
// `call_user_func` if you don't have parameters.
call_user_func_array($callback, ['World']);


