<?php
require_once(__DIR__ . '/../vendor/autoload.php');
use function Functional\map;
use function Functional\filter;
use function Functional\partial_method;

function getUserPhonesFromDate2($limit, $users)
{
    return map(
        filter($users, function(User $u) use($limit) { // 原代码 filter 参数给错了
            return $u->registration_date()->getTimestamp() > $limit;
        }),
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

var_dump(getUserPhonesFromDate2($limit, $users));
