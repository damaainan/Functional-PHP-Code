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
$numerals = [1, 2, 3, 4];
$english = ['one', 'two'];
$french = ['un', 'deux', 'trois'];
$zipped = array_map(null, $numerals, $english, $french);

list($numerals2, $english2, $french2) = unzip($zipped);

var_dump($numerals == $numerals2);
// bool(true)
var_dump($english == $english2);
// bool(true)
var_dump($french == $french2);
// bool(true)


