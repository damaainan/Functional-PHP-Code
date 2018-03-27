<?php
require "../vendor/autoload.php";
use Functional as f;

class Position
{
    public $disc;
    public $src;
    public $dst;
    public $via;

    public function __construct($n, $s, $d, $v)
    {
        $this->disc = $n;
        $this->src = $s;
        $this->dst = $d;
        $this->via = $v;
    }
}

function hanoi(Position $pos, array $moves = [])
{
    if ($pos->disc === 1) {
        echo("Move a disc from the {$pos->src} rod to the {$pos->dst} rod\n");

        if(count($moves) > 0) {
            hanoi(f\head($moves), f\tail($moves));
        }
    } else {
        $pos1 = new Position($pos->disc - 1, $pos->src, $pos->via, $pos->dst);
        $pos2 = new Position(1, $pos->src, $pos->dst, $pos->via);
        $pos3 = new Position($pos->disc - 1, $pos->via, $pos->dst, $pos->src);

        hanoi($pos1, array_merge([$pos2, $pos3], $moves));
    }
}

hanoi(new Position(3, 'left', 'right', 'middle'));



