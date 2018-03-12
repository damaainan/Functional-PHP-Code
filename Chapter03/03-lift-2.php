<?php
require_once __DIR__.'/03-maybe-final-1.php';
function lift(callable $f)
{
    return function() use ($f)
    {
        if(array_reduce(func_get_args(), function(bool $status, Maybe $m) {
            return $m->isNothing() ? false : $status;
        }, true)) {
            $args = array_map(function(Maybe $m) {
                // it is safe to do so because the fold above checked
                // that all arguments are of type Some
                return $m->getOrElse(null);
            }, func_get_args());
            return Maybe::just(call_user_func_array($f, $args));
        }

        return Maybe::nothing();
    };
}



