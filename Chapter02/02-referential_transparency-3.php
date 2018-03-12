<?php

return abs($p->x - $target->x) < 2 && abs($p->y - $target->y) < 2 ?
    loseHitpoint($target) :
    $target;



