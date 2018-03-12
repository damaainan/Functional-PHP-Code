<?php
require_once('05-monad.php');
// those lines won't appear in the book, they are here just
// so that PHP can correctly lint the code.
function read_file() {}
function post() {}
class Either {
    public static function pure($a) {}
    public function bind($a) {}
}



