<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


// Inicio 
Route::get('/', function () {
    return view('app');
});

// Autenticaciones
Route::prefix('autenticar')->group(function(){

    //login
    Route::get('/iniciosesion', [AuthController::class, 'index']);

    Route::post('/iniciosesion', [AuthController::class, 'register']);
});