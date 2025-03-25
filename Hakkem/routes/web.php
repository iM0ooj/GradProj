<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/{path}', function ($path) {
    $view = 'University.' . str_replace('/', '.', $path);
    if (view()->exists($view)) {
        return view($view);
    }
    abort(404);
})->where('path', '.*');
