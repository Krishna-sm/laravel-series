<?php

use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\TestController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [TestController::class,'index']);


Route::get('/user/{id}/{name}', [TestController::class,'route_controller'])->middleware(TestMiddleware::class);

Route::get('/user',ProvisionServer::class);