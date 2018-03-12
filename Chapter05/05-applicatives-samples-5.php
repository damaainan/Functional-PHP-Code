<?php
require_once('../Chapter04/04-curry-2.php');
require_once('05-functor-3.php');

$add = curry(function(int $a, int $b) { return $a + $b; });

class IdentityFunctorExtended extends IdentityFunctor
{
    public function apply(IdentityFunctorExtended $f)
    {
        return $f->map($this->get());
    }
}

$applicative = (new IdentityFunctorExtended(5))->map($add);
$ten = new IdentityFunctorExtended(10);
echo $applicative->apply($ten)->get();
// 15


