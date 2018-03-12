<?php

$uppercase = array_map(function(string $s): string {
  return strtoupper($s);
}, ['hello', 'world']);



var_dump($uppercase);