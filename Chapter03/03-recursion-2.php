<?php

function hanoi(int $disc, string $source, string $destination, string $via)
{
    if ($disc === 1) {
        echo("Move a disc from the $source rod to the $destination rod\n");
    } else {
        // step 1 : move all discs but the first to the "via" rod
        hanoi($disc - 1, $source, $via, $destination);
        // step 2 : move the last disc to the destination
        hanoi(1, $source, $destination, $via);
        // step 3 : move the discs from the "via" rod to the destination
        hanoi($disc - 1, $via, $destination, $source);
    }
}



// Move a disc from the left rod to the right rod
// Move a disc from the left rod to the middle rod
// Move a disc from the right rod to the middle rod
// Move a disc from the left rod to the right rod
// Move a disc from the middle rod to the left rod
// Move a disc from the middle rod to the right rod
// Move a disc from the left rod to the right rod

