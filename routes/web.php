<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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

Route::get('/signin', [LoginController::class, 'signin'])->name('signin');
Route::get('/signout', [LoginController::class, 'logout'])->name('logout');
Route::post('/signinAuth', [LoginController::class, 'signinAuth'])->name('signinAuth');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');

Route::get('/', function () {
    return view('index');
});
