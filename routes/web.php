<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChapterController;




Route::get('/', function () {
    if (Auth::check()) {
        return "test";
    }
    return view('myApp');
})->name('login');



Route::prefix('api/v1')->group(function () {
    // Inscription
    Route::post('/register', [AuthController::class, 'register']);
    // Connexion
    Route::post('/login', [AuthController::class, 'login']);

    // Ensuite, les routes protégées par Sanctum
    //Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);


        Route::get('/chapters/{id}', [ChapterController::class, 'show']);

    //});
});
