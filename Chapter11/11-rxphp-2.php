<?php
require './vendor/autoload.php';
use \Rx\Observer\CallbackObserver;

$client = new PgAsync\Client([ "user" => "root", "database" => "caiji" ]);

$select = $client->query('SELECT * FROM lottery_link')->subscribe(new CallbackObserver(
    function ($row) { },
    function ($e) { },
    function () { }
));
print_r($select);

// $select->subscribe(new CallbackObserver(
//     function ($row) {
//         var_dump($row);
//     },
//     function ($e) {
//         echo "Failed.\n";
//     },
//     function () {
//         echo "SELECT complete.\n";
//     }
// ));

