<?php

use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\TestController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\test;
use App\Http\Middleware\test1;

// Route::get('/', [TestController::class,'index']);


// Route::get('/user/{id}/{name}', [TestController::class,'route_controller'])->middleware(TestMiddleware::class);

// Route::get('/user',ProvisionServer::class);

// Route::get("/",function ()  {
//         return [
//             'msg'=>'video #4 Middlewares....'
//         ];
// })->middleware([test::class,test1::class])

// ;

// Route::middleware(test::class)->group(function(){
//     Route::get("/",function(){
//         return [
//                         'msg'=>'video #4 Middlewares....'
//                     ];
//     });
//     Route::get("/user",function(){
//         return [
//                         'msg'=>'video #4 Middlewares....'
//                     ];
//     })->withoutMiddleware(test::class);
// });

Route::get("/",function(){
            return [
                            'msg'=>'video #4 Middlewares....'
                        ];
        })->middleware('test_mid');