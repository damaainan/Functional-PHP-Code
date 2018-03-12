<?php

/**
 * @param string $s
 * @return bool
 */
function my_function($s) {
    return is_string($s);
}

Annotation::check('my_function');


