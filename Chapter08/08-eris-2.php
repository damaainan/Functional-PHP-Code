<?php

class StringAreNotNumbersTest extends \PHPUnit_Framework_TestCase
{
    use Eris\TestTrait;

    public function testStrings()
    {
        $this->limitTo(1000)
             ->forAll(Generator\string())
             ->then(function ($s) {
                 $this->assertFalse(
                     is_numeric($s),
                     "'$s' is a numeric value."
                 );
             });
     }
}


