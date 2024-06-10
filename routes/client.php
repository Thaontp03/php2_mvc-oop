<?php

use Admin\Php2MvcOop\Controllers\Client\AboutController;
use Admin\Php2MvcOop\Controllers\Client\ContactController;
use Admin\Php2MvcOop\Controllers\Client\HomeController;
use Admin\Php2MvcOop\Controllers\Client\LoginController;
use Admin\Php2MvcOop\Controllers\Client\ProductController;

$router->get('/',               HomeController::class . '@index');
$router->get('/about',          AboutController::class . '@index');

$router->get('/contact',        ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

$router->get('/product',        ProductController::class . '@index');
$router->get('/product/{id}',   ProductController::class . '@detail');

$router->get('/auth/login',          LoginController::class . '@showFormLogin');
$router->post('/auth/handle-login',  LoginController::class . '@login');
$router->get('/auth/logout',         LoginController::class . '@logout');