<?php

class BlogPost
{
    private $status;
    private $publicationDate;

    public function setStatus(string $s)
    {
        $this->status = $s;
    }

    public function setPublicationDate(DateTime $d)
    {
        $this->publicationDate = $d;
    }
}



