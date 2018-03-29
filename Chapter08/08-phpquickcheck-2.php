<?php
require "../vendor/autoload.php";
use QCheck\Annotation;
/**
 * @param string $s
 * @return bool
 */
function my_function($s) {
    return is_string($s);
}

$ret = Annotation::check('my_function');

var_dump($ret);
