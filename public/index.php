<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\AuthController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

session_start();

$routing = new Routing();

$routing->get('/', DefaultController::class, 'index');
$routing->get('/auth/login', AuthController::class, 'login');
$routing->post('/auth/login', AuthController::class, 'login');
$routing->get('/auth/register', AuthController::class, 'register');
$routing->post('/auth/register', AuthController::class, 'register');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}