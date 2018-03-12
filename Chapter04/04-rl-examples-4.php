<?php
require_once(__DIR__ . '/../vendor/autoload.php');
use function Functional\map;
use function Functional\filter;
use function Functional\partial_method;

function getUserPhonesFromDate2($limit, $users)
{
    return map(
        filter(function(User $u) use($limit) {
            return $u->registration_date()->getTimestamp() > $limit;
        }, $users),
        partial_method('phone')
    );
}



