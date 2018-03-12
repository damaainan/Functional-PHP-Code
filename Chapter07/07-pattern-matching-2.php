<?php

$group_names = [ 10 => 'admin', 5 => 'moderator' ];

$statuses = array_map(m\match([
    '[name, s]' => function($name, $s) use($group_names) {
        return $name.
               ' - '.
               (isset($group_names[$s]) ? $group_names[$s] : 'normal user');
    },
    '[]' => 'incomplete array',
    '_' => 'n/a',
]), $users);

print_r($statuses);
// Array (
//    [0] => admin
//    [1] => moderator
//    [2] => normal user
//    [3] => incomplete array
//    [4] => n/a
// )



