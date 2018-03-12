<?php

function upload_fp(string $path, callable $f) {
    return Either::pure($path)
      ->bind('read_file')
      ->bind(post('/uploads'))
      ->bind($f);
}


