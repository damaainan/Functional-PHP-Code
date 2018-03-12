<?php

function even($n) {
    return $n == 0 ? 'yes' : odd($n - 1);
}

function odd($n) {
    return $n == 0 ? 'no' : even($n - 1);
}

echo even(10);
// yes

echo odd(10);
// no



