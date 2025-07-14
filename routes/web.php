<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [UserController::class, 'store']);
Route::get('/list', [UserController::class, 'show']);