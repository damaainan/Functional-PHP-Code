<?php
require_once __DIR__.'/03-maybe-final-1.php';

function getCurrentUser() { return new User(); }
class User { public $name = 'John'; }
class AnonymousUser { public $name = 'Guest'; }

$user = Maybe::fromValue(getCurrentUser());

$name = $user->map(function(User $u) {
  return $u->name;
})->getOrElse('Guest');

echo sprintf("Welcome %s", $name);
// Welcome John

echo sprintf("Welcome %s", $user->getOrElse(new AnonymousUser())->name);
// Welcome John



