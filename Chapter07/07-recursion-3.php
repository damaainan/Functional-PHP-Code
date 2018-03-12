<?php

function not_a_tail_call($name) {
    return strtoupper('Hello') + ' ' + $name;
}

function also_not_a_tail_call($a) {
    return 2 * max($a, 10);
}



