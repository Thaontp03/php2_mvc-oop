<?php

use Admin\Php2MvcOop\Controllers\Admin\DashboardController;
use Admin\Php2MvcOop\Controllers\Admin\UserController;
use Admin\Php2MvcOop\Controllers\Admin\ProductController;

$router->before('GET|POST','/admin/*.*', function(){
    if(!isset($_SESSION['user'])){
        header('location: ' .url('login'));
        exit();
    }
});

$router->mount('/admin',function() use($router){
    $router ->get('/', DashboardController::class . '@dashboard');
    // CRUD User
    $router->mount('/users',function() use($router){
        $router ->get('/', UserController::class . '@index');
        $router ->get('/create', UserController::class . '@create');
        $router ->post('/store', UserController::class . '@store');
        $router ->get('/{id}/show', UserController::class . '@Show');
        $router ->get('/{id}/edit', UserController::class . '@edit');
        $router ->post('/{id}/update', UserController::class . '@update');
        $router ->get('/{id}/delete', UserController::class . '@delete');
    });
    $router->mount('/products',function() use($router){
        $router ->get('/', ProductController::class . '@index');
        $router ->get('/create', ProductController::class . '@create');
        $router ->post('/store', ProductController::class . '@store');
        $router ->get('/{id}/show', ProductController::class . '@Show');
        $router ->get('/{id}/edit', ProductController::class . '@edit');
        $router ->post('/{id}/update', ProductController::class . '@update');
        $router ->get('/{id}/delete', ProductController::class . '@delete');
    });
});

// $router ->get('/admin/users', UserController::class . '@index');
// $router ->get('/admin/users/create', UserController::class . '@create');
// $router ->post('/admin/users/store', UserController::class . '@store');
// $router ->get('/admin/users/{id}', UserController::class . '@Show');
// $router ->get('/admin/users/{id}/edit', UserController::class . '@edit');
// $router ->put('/admin/users/{id}/update', UserController::class . '@update');
// $router ->delete('/admin/users/{id}/delete', UserController::class . '@delete');