<?php

class StaticFunction
{
    public function testing()
    {
        return (static function() {
            // no access to $this here
        });
    }
};



