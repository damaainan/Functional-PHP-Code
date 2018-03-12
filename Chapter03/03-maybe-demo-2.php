<?php
require_once __DIR__.'/03-maybe-final-1.php';

function getCurrentUser() { return new User(); }
class User { public $name = 'John'; }
class AnonymousUser { public $name = 'Guest'; }
$user = getCurrentUser();

$name = $user == null ? 'Guest' : $user->name;

echo sprintf("Welcome %s", $name);
// Welcome John



