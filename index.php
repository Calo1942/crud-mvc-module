<?php

    require_once __DIR__ . '/vendor/autoload.php';
    define('BASE_URL', 'http://localhost/uni/mvc-custom-design-un-carlos/');

    if (file_exists(__DIR__ . '/src/Controllers/FrontController.php')) {
        require_once(__DIR__ . '/src/Controllers/FrontController.php');
    } else {
        die("FrontController.php no encontrado");
    }
