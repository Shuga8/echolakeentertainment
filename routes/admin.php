<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Auth')->name('auth.')->group(function () {
    Route::controller('AuthController')->group(function () {
        Route::get('', 'index')->name('login')->middleware('admin.guest');
    });
});
