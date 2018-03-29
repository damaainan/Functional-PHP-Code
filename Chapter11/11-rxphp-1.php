<?php
require './vendor/autoload.php';
use \Rx\React\FromFileObservable;
use \Rx\Observer\CallbackObserver;

$data = new FromFileObservable("11-example.csv");
print_r($data);
$data = $data
    ->cut()
    ->map('str_getcsv')
    ->map(function (array $row) { return $row; });
print_r($data);
$data->subscribe(new CallbackObserver(
    function ($data) { echo $data[0]."\n"; },
    function ($e) { echo "error\n"; },
    function () { echo "done\n"; }
));

print_r($data);

