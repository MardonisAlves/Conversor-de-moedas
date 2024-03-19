<?php

use Cyber\Router\AppRoutes;
define('CONTENT_TYPE_JSON', 'application/json');
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$routes = new AppRoutes();

