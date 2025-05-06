<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChapterController;




Route::get('/', function () {

    return view('myApp');
})->name('login');



Route::prefix('api/v1')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);


        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);


        Route::get('/chapters/{id}', [ChapterController::class, 'show']);

});
