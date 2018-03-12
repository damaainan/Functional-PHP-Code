<?php

// let's assume Session is a class giving access
// to the $_SESSION variable.
function nextMessage(): string
{
    return Session::pop('message');
}

// A simple score updating method for a game
function updateScore(Player $player, int $points)
{
    $score = $player->getScore();
    $player->setScore($score + $points);
}

 

