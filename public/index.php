<?php

use app\controllers\AuthController;
use app\controllers\ContactsController;
use app\core\Application;
use app\controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';


$app = new Application(dirname(__DIR__));


/*
* ROUTER TO VIEWS
*/

$app->router->get('/', [HomeController::class, 'home']);

$app->router->get('/contacts', [ContactsController::class, 'contacts']);

$app->router->post('/contacts', [ContactsController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);

$app->router->post('/login', [AuthController::class, 'handleLogin']);

$app->router->get('/register', [AuthController::class, 'handleRegister']);

$app->router->post('/register', [AuthController::class, 'handleRegister']);

// RUN
$app->run();


