<?php
function map(callable $callback)
{
    return function(array $array) use($callback) {
        return array_map($callback, $array);
    };
}

function replace($regex)
{
    return function(string $replacement) use($regex) {
        return function(string $subject) use($regex, $replacement) {
            return preg_replace($regex, $replacement, $subject);
        };
    };
}
$space2underscore = map(replace('/\s/i')('_'));
print_r($space2underscore(['Hello world!', 'How are you ?']));
// Array
// (
// [0] => Hello_world!
// [1] => How_are_you_?
// )

$replaceVowels = replace('/[aeiouy]/i');
$vowels2star = $replaceVowels('*');
echo $vowels2star('Functional programming');
// F*nct**n*l pr*gr*mm*ng


