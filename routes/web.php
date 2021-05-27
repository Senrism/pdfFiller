<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Maker\FileController;

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


Auth::routes(['register' => false]);
Route::prefix('Maker')->middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/select-file', [FileController::class, 'index'])->name('select-file');
    Route::get('/add-file', [FileController::class, 'create'])->name('add-file');
    Route::post('/store-file', [FileController::class, 'store'])->name('store-file');

});
