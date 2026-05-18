<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

$router
    ->get('/',[App\Controller\Home::class, 'index'])
    ->get('/invoices',[App\Controller\Invoice::class, 'index'])
    ->get('/invoices/create',[App\Controller\Invoice::class, 'create'])
    ->post('/invoices/create',[App\Controller\Invoice::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));