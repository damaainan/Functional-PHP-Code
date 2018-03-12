<?php

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Monad\Collection;

class FunctionalEntityRepository extends EntityRepository
{
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        return m\maybeNull(parent::find($id, $lockMode, $lockVersion));
    }

    public function findOneBy(array $criteria, array $orderBy = null)
    {
        return m\maybeNull(parent::findOneBy($criteria, $orderBy));
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return Collection::of(parent::findBy($criteria, $orderBy, $limit, $offset));
    }

    public function findAll()
    {
        return Collection::of(parent::findAll());
    }
}


