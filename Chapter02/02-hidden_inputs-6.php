<?php

function set_administrator(EntityManager $em, User $u)
{
    $em->createQueryBuilder()
       ->update('models\User', 'u')
       ->set('u.admin', 1)
       ->where('u.id = ?1')
       ->setParameter(1, $u->id)
       ->getQuery()->execute();
}

function log_message($message)
{
    echo $message."\n";
}

function updatePlayers(Player $winner, Player $loser, int $score)
{
    $winner->updateScore($score);
    $loser->updateScore(-$score);
}


