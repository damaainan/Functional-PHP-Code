<?php
require "../vendor/autoload.php";
use FunctionalPHP\PatternMatching as m;


$data = [
  'Gilles',
  ['Some street', '12345', 'Some City'],
  'xxx xx-xx-xx',
  ['admin', 'staff'],
  ['username' => 'gilles', 'password' => '******'],
  [12, 34, 53, 65, 78, 95, 102]
];

print_r(m\extract('[name, _, phone, groups, [username, _], posts@(first:_)]', $data));
// Array (
//    [name] => Gilles
//    [phone] => xxx xx-xx-xx
//    [groups] => Array ( [0] => admin [1] => staff )
//    [username] => gilles
//    [posts] => Array ( ... )
//    [first] => 12
//)



