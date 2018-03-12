<?php

function greater($limit) {
    return function($a) {
        return $a > $limit;
    };
}

function getUserPhonesFromDate3($limit, $users)
{
    return map(
        filter(compose(
            partial_method('registration_date'),
            partial_method('getTimestamp'),
            greater($limit)
          ),
          $users),
        partial_method('phone')
    );
}



