<?php

class BlogPost2
{
    private $status;
    private $publicationDate;

    public function publish(DateTime $d)
    {
        $this->status = 'published';
        $this->publicationDate = $d;
    }
}



