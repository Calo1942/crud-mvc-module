<?php

    require_once __DIR__ . '/vendor/autoload.php';

    if (file_exists(__DIR__ . '/src/Controllers/FrontController.php')) {
        require_once(__DIR__ . '/src/Controllers/FrontController.php');
    } else {
        die(__DIR__ . '/src/Controllers/FrontController.php');
    }
