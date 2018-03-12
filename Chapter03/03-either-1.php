<?php

abstract class Either
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public static function right($value): Right
    {
        return new Right($value);
    }

    public static function left($value): Left
    {
        return new Left($value);
    }

    abstract public function isRight(): bool;

    abstract public function isLeft(): bool;

    abstract public function getRight();

    abstract public function getLeft();

    abstract public function getOrElse($default);

    abstract public function orElse(Either $e): Either;

    abstract public function map(callable $f): Either;

    abstract public function flatMap(callable $f): Either;

    abstract public function filter(callable $f, $error): Either;
}



