<?php

use \Rx\React\FromFileObservable;
use \Rx\Observer\CallbackObserver;

$data = new FromFileObservable("11-example.csv");

$data = $data
    ->cut()
    ->map('str_getcsv')
    ->map(function (array $row) { return $row; });

$data->subscribe(new CallbackObserver(
    function ($data) { echo $data[0]."\n"; },
    function ($e) { echo "error\n"; },
    function () { echo "done\n"; }
));



