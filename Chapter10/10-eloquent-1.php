<?php

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    private $status;
    private $publicationDate;

    public function publish(DateTime $d)
    {
        $new = clone $this;

        $new->status = 'published';
        $new->publicationDate = $d;
        return $new;
    }
}



