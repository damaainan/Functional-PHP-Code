<?php

$counter = 0;

function increment()
{
    global $counter;

    return ++$counter;
}

function increment2()
{
    static $counter = 0;

    return ++$counter;
}

function get_administrators(EntityManager $em)
{
    // Let's assume $em is a Doctrine EntityManager allowing
    // to perform DB queries
    return $em->createQueryBuilder()
              ->select('u')
              ->from('User', 'u')
              ->where('u.admin = 1')
              ->getQuery()->getArrayResult();
}

function get_roles(User $u)
{
    return array_merge($u->getRoles(), $u->getGroup()->getRoles());
}



