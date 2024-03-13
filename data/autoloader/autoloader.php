<?php
spl_autoload_register(function ($className) {
    $directory = 'classes/';
    $fileExtension = '.php';
    $filePath = $directory . $className . $fileExtension;

    if (file_exists($filePath)) {
        require_once $filePath;
    } else {
        echo "Class '$className' not found.";
    }
});