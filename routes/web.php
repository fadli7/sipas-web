<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\Admin;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/prisoner', [Admin\PrisonerController::class, 'index'])->name('prisonIndex');
Route::get('/dashboard',[Controllers\DashboardController::class,'index'] )->name('dashboard');

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
