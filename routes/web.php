<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'posts', 'as'=>'posts.'], function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('store', [PostController::class, 'store'])->name('store');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [PostController::class, 'update'])->name('update');
});
