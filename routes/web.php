<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('landing');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
