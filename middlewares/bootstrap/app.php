<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\test1;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->use([test1::class]);

        $middleware->alias([
            'test_mid'=>test1::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
