<?php

function getCurrentTvProgram(Channel $channel): string
{
    // let's assume that getProgramAt is a pure method.
    return $channel->getProgramAt(time());
}



