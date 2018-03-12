<?php
require_once __DIR__.'/03-maybe-final-1.php';

function getCurrentUser() { return new User(); }
class User { public $name = 'John'; }
class AnonymousUser { public $name = 'Guest'; }


$user = getCurrentUser();

if($user == null) {
   $user = new AnonymousUser();
}

echo sprintf("Welcome %s", $user->name);
// Welcome John



