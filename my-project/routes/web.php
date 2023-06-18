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

Route::get('/',[UserController::class, 'login'])->name('user.login');
Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/authenticate', [UserController::class, 'login'])->name('user.authenticate');
Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/save-user', [UserController::class, 'store'])->name('user.store');
//Route::get('/content/index/getElement/{id}', [IndexController::class, 'getElement'])->name('index.getElement');
Route::get('/index', [IndexController::class, 'getElements'])->name('content.index');
//Route::post('/content/index/createElement', [IndexController::class, 'createElement'])->name('index.createElement');
Route::get('/content/search', [IndexController::class,'search'])->name('content.search');
Route::get('/content/detail/{id}', [IndexController::class,'getElement'])->name('content.detail');
Route::get('/content/create', [IndexController::class,'createElement'])->name('content.create');
Route::post('/content/store', [IndexController::class,'storeElement'])->name('content.store');
//Route::get('/content/index/deleteElement/{id}', [IndexController::class, 'deleteElement'])->name('index.deleteElement');
#add route get to index without controller