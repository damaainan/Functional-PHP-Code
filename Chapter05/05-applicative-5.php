<?php
require_once('05-functor-3.php');
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

class CollectionApplicative extends Applicative implements IteratorAggregate
{
    private $values;

    protected function __construct($values)
    {
        $this->values = $values;
    }

    public static function pure($values): Applicative
    {
        if($values instanceof Traversable) {
            $values = iterator_to_array($values);
        } else if(! is_array($values)) {
            $values = [$values];
        }

        return new static($values);
    }

    public function apply(Applicative $data): Applicative
    {
        return $this->pure(array_reduce($this->values,
            function($acc, callable $function) use($data) {
                return array_merge($acc, array_map($function, $data->values) );
            }, [])
        );
    }

    public function getIterator() {
        return new ArrayIterator($this->values);
    }
}


