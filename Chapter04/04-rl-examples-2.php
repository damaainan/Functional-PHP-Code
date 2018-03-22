<?php
class User {
    public function phone(): string
    {
        return '';
    }

    public function registration_date(): DateTime
    {
        return new DateTime();
    }
}


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

$users = [new User(), new User(), new User()];


var_dump(getLastMonthUserPhones($users));