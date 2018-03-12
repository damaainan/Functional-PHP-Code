<?php

class Bounce
{
    private $f;
    private $args;

    public function __construct(callable $f, ...$args)
    {
        $this->f = $f;
        $this->args = $args;
    }

    public function __invoke()
    {
        return call_user_func_array($this->f, $this->args);
    }
}

function trampoline(callable $f, ...$args) {
    $return = call_user_func_array($f, $args);

    while($return instanceof Bounce) {
        $return = $return();
    }
    return $return;
}



