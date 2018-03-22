<?php

require_once('06-monadic_helpers.php');
require_once('06-reader-monad.php');
use Monad\Reader;
use Functional as f;

function hello()
{
    return Reader::of(function($name) {
        return "Hello $name!";
    });
}

function ask($content)
{
    return Reader::of(function($name) use($content) {
        return $content.
               ($name == 'World' ? '' : ' How are you ?');
    });
}

$r = hello()
      ->bind('ask')
      ->map('strtoupper');

echo $r->runReader('World');
// HELLO WORLD!

echo $r->runReader('Gilles');
// HELLO GILLES! HOW ARE YOU ?



