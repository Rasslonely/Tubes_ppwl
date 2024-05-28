<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\TrackVisitors;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        

        $middleware->alias([
            'userMiddleware' => UserMiddleware::class, 
            'adminMiddleware' => AdminMiddleware::class, 
        ]);

        // $middleware->group('web', [
        //     TrackVisitors::class, // Tambahkan ini ke grup 'web'
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
