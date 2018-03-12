<?php

namespace Monad;

use Common;
use FantasyLand\Apply;
use FantasyLand\Monad;
use FantasyLand\Monoid;
use FantasyLand\Semigroup;

class StringMonoid implements Monoid
{
    private $value;
    public function __construct($s) {
        $this->value = $s;
    }

    public function getEmpty() {
        return '';
    }

    public function get() {
        return $this->value;
    }

    public function concat(Semigroup $value) {
        return new static($this->value . $value->get());
    }
}



