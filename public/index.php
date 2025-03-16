<?php

use app\Controller\IndexController;
use app\Routes\Router;

require_once __DIR__. '/../vendor/autoload.php';
session_start();

$router = new Router($_SERVER['REQUEST_URI']);



// routes 
$router->get('/', [IndexController::class, 'index']);
$router->get('/home',[IndexController::class, 'home']);




$router->run();
