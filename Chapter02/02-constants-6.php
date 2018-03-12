<?php

const FOO = 6;

class B
{
    const BAR = FOO * 7;
    const BAZ = "The answer is ".self.BAR;
}



