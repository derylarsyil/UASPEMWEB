<?php
protected $routeMiddleware = [
    // lainnya...
    'authcheck' => \App\Http\Middleware\AuthCheck::class,
    protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,

    // ADMIN
    'isadmin' => \App\Http\Middleware\IsAdmin::class,
];


];

