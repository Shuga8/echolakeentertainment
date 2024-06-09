<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Auth')->name('auth.')->group(function () {
    Route::controller('AuthController')->group(function () {
        Route::get('', 'index')->name('login')->middleware('admin.guest');
        Route::post('/auth', 'login')->name('authenticate');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::middleware('admin')->group(function () {
    Route::controller('AdminController')->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('mail', 'showMailForm')->name('mailForm');
        Route::post('mail/send', 'mail')->name('mail.send');
    });
});
