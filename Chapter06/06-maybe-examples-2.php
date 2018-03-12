<?php

$divide = function($acc, $i) {
    return $i == 0 ? nothing() : just($acc / $i);
};

var_dump(f\foldM($divide, 100, [2, 5, 2])->extract());
// int(5)

var_dump(f\foldM($divide, 100, [2, 0, 2])->extract());
// NULL



