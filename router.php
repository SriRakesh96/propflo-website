<?php
// router.php

// If the file exists, serve it directly
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $file = __DIR__ . $path;
    if (is_file($file)) {
        return false;
    }
}

// If not, map pretty URLs to .php files
$request = trim($_SERVER["REQUEST_URI"], "/");
if ($request === "") {
    require "index.php";
} else {
    $target = "$request.php";
    if (file_exists($target)) {
        require $target;
    } else {
        http_response_code(404);
        echo "404 Not Found";
    }
}