<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/login', [loginController::class, 'index']);
Route::post('/masuk', [loginController::class, 'masuk']);

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sosmed', function () {
    return view('sosmed');
});