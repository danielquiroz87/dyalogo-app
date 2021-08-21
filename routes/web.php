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


Route::post('/autenticar', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('autenticar');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('/user/new', [App\Http\Controllers\UsersController::class, 'new'])->name('user.new');
Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');

Route::post('/user/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('user.delete');

Route::post('/user/save', [App\Http\Controllers\UsersController::class, 'save'])->name('user.save');



Auth::routes();
