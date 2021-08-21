<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
  return view('home');
})->name('/');

Route::get('/about',  [AboutController::class, 'index'])->name('about')->middleware('guest');

Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',  [LoginController::class, 'logIn'])->name('login')->middleware('guest');

Route::post('/logout',  [LoginController::class, 'logOut'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

Route::get('/items', [ItemsController::class, 'index'])->name('items')->middleware('auth');
Route::post('/items', [ItemsController::class, 'store'])->name('items')->middleware('auth');

Route::get('/list', [ListController::class, 'index'])->name('list')->middleware('auth');
Route::get('/add_list/{id}', [ListController::class, 'store'])->name('add_list')->middleware('auth');

Route::get('/delete_list/{id}', [ListController::class, 'destroy'])->name('delete_list')->middleware('auth');

Route::get('/update_list/{id}', [ListController::class, 'update'])->name('update_list')->middleware('auth');

Route::get('/search', [ItemsController::class, 'search'])->name('search')->middleware('auth');