<?php

$url = 'user/10';

function homepage() { return "Hello!"; }
function user($id) { return "user $id"; }
function add_user_to_group($group, $user) { return "done."; }

$result = m\match([
    '["user", id]' => 'user',
    '["group", group, "add", user]' => 'add_user_to_group',
    '_' => 'homepage',
], explode('/', $url));

echo $result;
// user 10



