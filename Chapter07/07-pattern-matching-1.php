<?php
require "../vendor/autoload.php";
use FunctionalPHP\PatternMatching as m;

$users = [
    [ 'name' => 'Gilles', 'status' => 10 ],
    [ 'name' => 'John', 'status' => 5 ],
    [ 'name' => 'Ben', 'status' => 0],
    [],
    'some random string'
];

$statuses = array_map(m\match([
    '[_, 10]' => function() { return 'admin'; },
    '[_, 5]' => 'moderator',
    '[_, _]' => 'normal user',
    '_' => 'n/a',
]), $users);

print_r($statuses);
// Array (
//    [0] => admin
//    [1] => moderator
//    [2] => normal user
//    [3] => n/a
//    [4] => n/a
// )



