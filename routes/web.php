<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\Admin;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/prisoner', [Admin\PrisonerController::class, 'index'])->name('prisonerIndex');
Route::get('/prisoner/create', [Admin\PrisonerController::class, 'create'])->name('prisonerCreate');
Route::get('/prisoner/{id}', [Admin\PrisonerController::class, 'detail'])->name('prisonerDetail');
Route::get('/prisoner/edit/{id}', [Admin\PrisonerController::class, 'edit'])->name('prisonerEdit');

Route::get('/dashboard',[Controllers\DashboardController::class,'index'] )->name('dashboard');

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
