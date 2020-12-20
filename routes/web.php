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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subjects',[App\Http\Controllers\SubjectController::class,'index'])->name('index');
Route::get('/users',[App\Http\Controllers\UserController::class,'index']) -> middleware('auth');

Route::get('/subjects/create',[App\Http\Controllers\SubjectController::class,'create']);
Route::post('/subjects/create',[App\Http\Controllers\SubjectController::class,'store']);

