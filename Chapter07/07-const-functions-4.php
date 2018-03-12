<?php

class A {
    public static function static_test() {}
    public function test() {}
}

/** @var callable */
const A_static = ['A', 'static_test'];


