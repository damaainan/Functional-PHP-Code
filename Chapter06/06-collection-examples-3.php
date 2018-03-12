<?php

class ChessPosition {
    public $col;
    public $row;

    public function __construct($c, $r)
    {
        $this->col = $c;
        $this->row = $r;
    }

    public function isValid(): bool
    {
        return ($this->col > 0 && $this->col < 9) &&
               ($this->row > 0 && $this->row < 9);
    }
}

function chess_pos($c, $r) { return new ChessPosition($c, $r); }



