<?php

$client = new PgAsync\Client([ "user" => "user", "database" => "db" ]);

$client->query('SELECT * FROM my_table')->subscribe(new CallbackObserver(
    function ($row) { },
    function ($e) { },
    function () { }
));



