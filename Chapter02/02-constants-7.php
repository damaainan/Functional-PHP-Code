<?php

const FOO = 'foo';
$bar = 'bar';

function test()
{
    // here FOO is accessible
    echo FOO;

    // however, if you want to access $bar, you have to use
    // the 'global' keyword.
    global $bar;
    echo $bar;
}


test();