<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/login', [loginController::class, 'index']);
Route::post('/masuk', [loginController::class, 'masuk']);

