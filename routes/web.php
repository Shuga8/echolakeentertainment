<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->prefix('admin')->name('admin')->group(function () {
    Route::namespace('Auth')->prefix('auth')->name('auth')->group(function () {
        Route::controller('AuthController')->group(function () {
            Route::get('', 'index')->name('login');
        });
    });
});
