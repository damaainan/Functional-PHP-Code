<?php

class A {}

$a = new A();

$a->invalid_method();
// PHP Warning: Uncaught Error: Call to undefined method A::invalid_method()



