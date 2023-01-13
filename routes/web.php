<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Login and Register Routes

//Login Routes:
Route::get('/login', [UserController::class, 'loginView']);
Route::post('/loginPost', [UserController::class, 'loginPost']);

//Register Routes:
Route::get('/register', [UserController::class, 'registerView']);
Route::post('/registerPost', [UserController::class, 'registerPost']);


