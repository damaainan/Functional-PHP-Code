<?php
require '../vendor/autoload.php';

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Functional as f;

use FunctionalPHP\FantasyLand\Foldable;


$divide = function($acc, $i) {
    return $i == 0 ? nothing() : just($acc / $i);
};

var_dump(f\foldM($divide, 100, [2, 5, 2])->extract()); // foldM 的参数类型 不能确定
// int(5)

var_dump(f\foldM($divide, 100, [2, 0, 2])->extract());
// NULL



