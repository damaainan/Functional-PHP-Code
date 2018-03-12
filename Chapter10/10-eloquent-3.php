<?php

use Illuminate\Database\Eloquent\Model as BaseModel;

class FunctionalModel extends BaseModel
{
    public function newEloquentBuilder($query)
    {
        return new FunctionalBuilder($query);
    }
}


