<?php
    declare(strict_types=1);
    require_once 'vendor/autoload.php';

    use components\Router;
    
    define('ROOT', dirname(__FILE__));
    $router = new Router();
    $router->run();
