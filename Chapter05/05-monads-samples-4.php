<?php

function upload(string $path, callable $f) {
    $content = read_file(filename);
    if($content === false) {
        return false;
    }

    $status = post('/uploads', $content);
    if($status === false) {
        return $false;
    }

    return $f($status);
}




