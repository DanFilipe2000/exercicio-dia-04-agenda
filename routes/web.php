<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

Route::group(['middleware' => 'auth'], function () {
    // Get All Contacts Route:
    Route::get('/contacts', [ContactController::class, 'getAll']);

    // Routes for register new contacts on database:
    Route::get('/contacts/create', [ContactController::class, 'create']);
    Route::post('/contacts/store', [ContactController::class, 'store']);

    // Routes for show contact by ID:
    Route::get('/contacts/show/{id}', [ContactController::class, 'getById']);

    // Edit Contacts Route:
    Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);
    Route::post('/contacts/update/{id}', [ContactController::class, 'update']);

    // Destroy Contact Route:
    Route::get('/contacts/delete/{id}', [ContactController::class, 'destroy']);
});

//Login Routes:
Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::post('/signin', [UserController::class, 'loginPost']);

//Register Routes:
Route::get('/register', [UserController::class, 'registerView']);
Route::post('/signup', [UserController::class, 'registerPost']);
