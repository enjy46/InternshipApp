<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('register' , [UserController::class , 'register'])->name('register');
Route::get('login' , [UserController::class , 'login'])->name('login');
Route::post('login' , [UserController::class , 'auth_login'])->name('auth_login');


Route::get('Home',[HomeController::class , 'Home'])->name('Home');
Route::get('article',[HomeController::class , 'index'])->name('article');
Route::get('add',[HomeController::class , 'add'])->name('add');
Route::post('store',[HomeController::class , 'store'])->name('store');
Route::get('/articles/{id}', [HomeController::class, 'show'])->name('articles.show');
