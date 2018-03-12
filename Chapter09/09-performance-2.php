<?php

class Integer {
    private $value;
    public function __construct($v) { $this->value = $v; }
    public function get() { return $this->value; }
}


class Adder {
    public function add(Integer $a, Integer $b) {
        return $a->get() + $b->get();
    }
}


