<?php

require __DIR__ . '/../vendor/liw/core/Loader.php';

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$router = new \liw\core\Router();
$router->start();