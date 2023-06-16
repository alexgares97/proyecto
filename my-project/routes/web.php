<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;


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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/addUser', function () {
    return view('addUser');
})->name('addUser');

Route::get('/index', [IndexController::class, 'getElements'])->name('index');
Route::get('/index/{id}', [IndexController::class, 'getElement'])->name('index');
Route::post('/index', [IndexController::class, 'createElement'])->name('index');
Route::delete('/index/{id}', [IndexController::class, 'deleteElement'])->name('index');
Route::put('/index/{id}', [IndexController::class, 'updateElement'])->name('index');
Route::post('/register', [UserController::class, 'create'])->name('createUser');
//Route::post('/addUser', [UserController::class, 'create'])->name('createUser');
Route::get('/addUser', [UserController::class, 'create'])->name('addUser');
Route::post('/addUser', [UserController::class, 'store'])->name('storeUser');

Route::post('/login', [UserController::class, 'login'])->name('loginUser');
//Route::post('/create', [UserController::class, 'create'])->name('createUser');
