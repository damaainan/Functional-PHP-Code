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

final class Just extends Maybe
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isJust(): bool
    {
        return true;
    }

    public function isNothing(): bool
    {
        return false;
    }

    public function getOrElse($default)
    {
        return $this->value;
    }
}



