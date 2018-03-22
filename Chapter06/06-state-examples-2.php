<?php
require '../vendor/autoload.php';
use Monad\State as s;
use Functional as f;

function randomInt()
{
    return s\state(function($state) {
        mt_srand($state);
        return [mt_rand(), mt_rand()];
    });
}

echo s\evalState(randomInt(), 12345);
// 162946439



