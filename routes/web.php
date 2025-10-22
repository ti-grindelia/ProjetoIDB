<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get ('/',         [LoginController::class,    'index'    ])->name('login');
Route::post('/',         [LoginController::class,    'logar'    ])->name('logar');
Route::get ('/logout',   [LoginController::class,    'logout'   ])->name('logout');
Route::get ('/register', [RegisterController::class, 'index'    ])->name('register');
Route::post('/register', [RegisterController::class, 'registrar'])->name('registrar');

Route::get('/home', function () {
    return view('welcome');
})->name('home');
