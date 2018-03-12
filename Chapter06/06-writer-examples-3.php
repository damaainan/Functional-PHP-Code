<?php

function some_complex_function(int $input)
{
    $msg = new StringMonoid('received: '.print_r($input, true).'. ');

    if($input > 10) {
        $w = new Writer($input / 2, $msg->concat(new StringMonoid("Halved the value. ")));
    } else {
        $w = new Writer($input, $msg);
    }

    if($input > 20)
    {
        return $w->bind('some_complex_function');
    }

    return $w;
}

list($value, $log) = (new Writer(15))->bind('some_complex_function')->runWriter();
echo $log->get();
// received: 15. Halved the value.

list($value, $log) = some_complex_function(27)->runWriter();
echo $log->get();
// received: 27. Halved the value. received: 13. Halved the value.

list($value, $log) = some_complex_function(50)->runWriter();
echo $log->get();
// received: 50. Halved the value. received: 25. Halved the value. received: 12. Halved the value.


