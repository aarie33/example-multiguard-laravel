<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@showLoginForm')->middleware('guest')->name('admin.login');
Route::post('/login', 'LoginController@login')->middleware('guest')->name('admin.login.attempt');

Route::middleware(['auth:web'])->group(function () {
    Route::post('/logout', 'LoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
});
