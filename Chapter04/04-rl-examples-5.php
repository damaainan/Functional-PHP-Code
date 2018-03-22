<?php
require_once(__DIR__ . '/../vendor/autoload.php');
use function Functional\map;
use function Functional\filter;
use function Functional\partial_method;
use function Functional\compose;

function greater($limit) {
    return function($a) {
        return $a > $limit;
    };
}

function getUserPhonesFromDate3($limit, $users)
{
    return map(
        filter($users, compose(  // compose 引用变量有问题 
                    partial_method('registration_date'),
                    partial_method('getTimestamp'),
                    greater($limit) 
                )
            ),
        partial_method('phone')
    );
}


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

$users = [new User(), new User(), new User()];

$limit = (new DateTime("-30 days"))->getTimestamp();

var_dump(getUserPhonesFromDate3($limit, $users));
