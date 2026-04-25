<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Extra Pages--------------------------------------------------------------------------------------------------------------------
//404 error page
Route::get('/extra', [App\Http\Controllers\InterventionsController::class, 'index'])->name('extra');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
