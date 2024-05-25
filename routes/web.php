<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;


Route::get('/', function () {
    return view('login');
})->name('loginroute');

Route::get('/register', function () {
    return view('Register');
})->name('registerroute');


Route::resource('user',CustomUserController::class);