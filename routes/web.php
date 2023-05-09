<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/dashboard',[Controllers\DashboardController::class,'index'] )->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
