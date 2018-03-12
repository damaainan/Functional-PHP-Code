<?php

class A
{
    const FOO = 'some value';

    public static function bar()
    {
        echo self::FOO;
    }
}

echo A::FOO;
// display 'some value'

echo constant('A::FOO');
// display 'some value'

echo defined('A::FOO') ? 'true' : 'false';
// display 'true'

A::bar();
// display 'some value'
