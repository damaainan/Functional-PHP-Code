<?php
/* The following code is not included in the book, it is
   is here so that the tool used to generate the code samples
   does not complains about non existing variables. */

require_once __DIR__.'/03-maybe-final-1.php';

function getCurrentUser() { return new User(); }
class User { public $name = 'John'; }
class AnonymousUser { public $name = 'Guest'; }



