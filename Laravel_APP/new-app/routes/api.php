<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);
// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [UserController::class, 'Logout']);
});

Route::get('/search', [TrainController::class, 'Search']);