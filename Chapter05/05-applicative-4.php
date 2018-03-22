<?php
require_once('05-functor.php');
abstract class Applicative implements Functor
{
    public abstract static function pure($value): Applicative;

    public abstract function apply(Applicative $f): Applicative;

    public function map(callable $f): Functor
    {
        return $this->pure($f)->apply($this);
    }
}
class IdentityApplicative extends Applicative
{
    private $value;

    protected function __construct($value)
    {
        $this->value = $value;
    }

    public static function pure($value): Applicative
    {
        return new static($value);
    }

    public function apply(Applicative $f): Applicative
    {
        return static::pure($this->get()($f->get()));
    }

    public function get()
    {
        return $this->value;
    }
}

function check_applicative_laws(Applicative $f1, callable $f2, $x)
{
    $identity = function($x) { return $x; };
    $compose = function(callable $a) {
        return function(callable $b) use($a) {
            return function($x) use($a, $b) {
                return $a($b($x));
            };
        };
    };

    $pure_x = $f1->pure($x);
    $pure_f2 = $f1->pure($f2);

    return [
        'identity' =>
            $f1->pure($identity)->apply($pure_x) ==
            $pure_x,
        'homomorphism' =>
            $f1->pure($f2)->apply($pure_x) ==
            $f1->pure($f2($x)),
        'interchange' =>
            $f1->apply($pure_x) ==
            $f1->pure(function($f) use($x) { return $f($x); })->apply($f1),
        'composition' =>
            $f1->pure($compose)->apply($f1)->apply($pure_f2)->apply($pure_x) ==
            $f1->apply($pure_f2->apply($pure_x)),
        'map' =>
            $pure_f2->apply($pure_x) ==
            $pure_x->map($f2)
    ];
}



