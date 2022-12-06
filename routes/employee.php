<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@showLoginForm')->middleware('guest')->name('employee.login');
Route::post('/login', 'LoginController@login')->middleware('guest')->name('employee.login.attempt');

Route::middleware(['auth:employee'])->group(function () {
    Route::post('/logout', 'LoginController@logout')->name('employee.logout');
    Route::get('/dashboard', 'DashboardController@index')->name('employee.dashboard');
});