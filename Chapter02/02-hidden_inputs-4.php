<?php

function getTvProgram(Channel $channel, int $when): string
{
    return $channel->getProgramAt($when);
}



