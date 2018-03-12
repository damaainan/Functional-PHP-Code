<?php

use Illuminate\Database\Eloquent\Builder as BaseBuilder;
use Widmogrod\Monad\Maybe as m;

class FunctionalBuilder extends BaseBuilder
{
    public function first($columns = array('*'))
    {
        return m\maybeNull(parent::first($columns));
    }

    public function firstOrFail($columns = array('*'))
    {
        return $this->first($columns)->orElse(function() {
            throw (new ModelNotFoundException)->setModel(get_class($this->model));
        });
    }

    public function findOrFail($id, $columns = array('*'))
    {
        return $this->find($id, $columns)->orElse(function() {
            throw (new ModelNotFoundException)->setModel(get_class($this->model));
        });
    }

    public function pluck($column)
    {
        return $this->first([$column])->map(function($result) {
            return $result->{$column};
        });
    }
}



