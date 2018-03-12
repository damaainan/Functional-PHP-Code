<?php

function unzip(array $data): array
{
    $return = [];

    $data = array_values($data);
    $size = count($data[0]);

    foreach($data as $child) {
        $child = array_values($child);
        for($i = 0; $i < $size; ++$i) {
            if(isset($child[$i]) && $child[$i] !== null) {
                $return[$i][] = $child[$i];
            }
        }
    }

    return $return;
}



