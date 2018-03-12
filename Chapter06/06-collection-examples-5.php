<?php

function moveKnight3($start): array
{
    return Collection::of($start)
        ->bind('moveKnight')
        ->bind('moveKnight')
        ->bind('moveKnight')
        ->extract();
}

function canReach($start, $end): bool
{
    return in_array($end, moveKnight3($start));
}

var_dump(canReach(chess_pos(6, 2), chess_pos(6, 1)));
// bool(true)

var_dump(canReach(chess_pos(6, 2), chess_pos(7, 3)));
// bool(false)


