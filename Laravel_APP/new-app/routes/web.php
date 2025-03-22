<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin/{id}',function($id){

})->name("admin");

Route::prefix('user')->name('us')->group(function(){
    Route::get('deshboard',function(){
        return "this is deshboard";
    });
});

Route::prefix('student')->group(function(){
Route::get('deshboard',function(){
    return "this is student deshboard";
})->name('st');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/orders/{id}', 'show');
    Route::get('/orders', 'store');
});

Route::resource('books',BookController::class);
Route::post('/login',[UserController::class,'Login']);