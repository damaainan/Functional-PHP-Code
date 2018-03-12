<?php

function liftEither(callable $f, $error = "An error occured")
{
    return function() use ($f)
    {
        if(array_reduce(func_get_args(), function(bool $status, Either $e) {
            return $e->isLeft() ? false : $status;
        }, true)) {
            $args = array_map(function(Either $e) {
                // it is safe to do so because the fold above checked
                // that all arguments are of type Some
                return $e->getRight(null);
            }, func_get_args());
            return Either::right(call_user_func_array($f, $args));
        }

        return Either::left($error);
    };
}


