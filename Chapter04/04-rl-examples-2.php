<?php

function getLastMonthUserPhones($users)
{
    $limit = (new DateTime("-30 days"))->getTimestamp();
    $return = [];
    foreach($users as $u) {
        if($u->registration_date()->getTimestamp() > $limit) {
            $return[] = $u->phone();
        }
    }
    return $return;
}



