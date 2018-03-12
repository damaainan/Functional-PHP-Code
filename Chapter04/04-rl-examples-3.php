<?php

function getUserPhonesFromDate($limit, $users)
{
    return array_map(function(User $u) {
        return $u->phone();
    }, array_filter($users, function(User $u) use($limit) {
        return $u->registration_date()->getTimestamp() > $limit;
    }));
}



