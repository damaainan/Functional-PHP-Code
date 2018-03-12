<?php
require_once(__DIR__ . '/../vendor/autoload.php');
use function Functional\sort;
use function Functional\compare_on;

function take(int $count) {
    return function($array) use($count) {
        return array_slice($array, 0, $count);
    };
};

function compare($a, $b) {
    return $a == $b ? 0 : $a < $b ? -1 : 1;
}

function getAtMostThreeFromDate($limit)
{
    return function($data) use($limit) {
        $function = compose(
            partial_right(
                'sort',
                compare_on('compare', partial_method('registration_date'))
            ),
            take(3),
            getPhonesFromDate($limit)
        );
        return $function($data);
    };
}


