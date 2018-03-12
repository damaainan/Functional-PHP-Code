<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require('04-curry-2.php');
use function Functional\partial_right;

$filter = curry('filter');
$map = function($cb) {
    return function($data) use($cb) {
        return map($data, $cb);
    };
};

function getPhonesFromDate($limit)
{
    return function($data) use($limit) {
        $function = compose(
            $filter(compose(
            partial_method('getTimestamp'),
                partial_method('registration_date'),
                greater($limit)
            )),
            $map(partial_method('phone'))
        );
        return $function($data);
    };
}



