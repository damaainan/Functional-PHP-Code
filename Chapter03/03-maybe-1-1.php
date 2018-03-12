<?php

abstract class Maybe
{
    public static function just($value): Just
    {
        return new Just($value);
    }

    public static function nothing(): Nothing
    {
        return Nothing::get();
    }

    abstract public function isJust(): bool;

    abstract public function isNothing(): bool;

    abstract public function getOrElse($default);
}



