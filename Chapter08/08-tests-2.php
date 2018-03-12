<?php

function title(string $string): string
{
  $stripped = strip_tags($string);
  $trimmed = trim($stripped);
  return capitalize($trimmed);
}


