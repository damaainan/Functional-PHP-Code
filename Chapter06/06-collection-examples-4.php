<?php

function moveKnight(ChessPosition $pos): Collection
{
    return Collection::of(f\filter(f\invoke('isValid'), Collection::of([
        chess_pos($pos->col + 2, $pos->row - 1),
        chess_pos($pos->col + 2, $pos->row + 1),
        chess_pos($pos->col - 2, $pos->row - 1),
        chess_pos($pos->col - 2, $pos->row + 1),
        chess_pos($pos->col + 1, $pos->row - 2),
        chess_pos($pos->col + 1, $pos->row + 2),
        chess_pos($pos->col - 1, $pos->row - 2),
        chess_pos($pos->col - 1, $pos->row + 2),
    ])));
}

print_r(moveKnight(chess_pos(8,1))->extract());
// Array (
//     [0] => ChessPosition Object ( [row] => 2 [col] => 6 )
//     [1] => ChessPosition Object ( [row] => 3 [col] => 7 )
// )



