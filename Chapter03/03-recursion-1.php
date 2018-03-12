<?php

function searchDirectory($dir, $accumulator = []) {
    foreach (scandir($dir) as $path) {
        // Ignore hidden files, current directory and parent directory
        if(strpos($path, '.') === 0) {
            continue;
        }

        $fullPath = $dir.DIRECTORY_SEPARATOR.$path;

        if(is_dir($fullPath)) {
            $accumulator = searchDirectory($path, $accumulator);
        } else {
            $accumulator[] = $fullPath;
        }
    }

    return $accumulator;
}



