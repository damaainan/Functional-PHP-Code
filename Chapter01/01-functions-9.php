<?php

class ThisBinding
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}



