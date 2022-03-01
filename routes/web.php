<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/posts/{user}' , [App\Http\Controllers\PostController::Class, 'index']);

Route::resource('posts', App\Http\Controllers\PostController::class)->except(['index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
