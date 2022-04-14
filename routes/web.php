<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\JoinTableController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/all', [ProductController::class, 'index']);
Route::get('/art', [ProductController::class, 'index1']);
Route::get('/collection', [ProductController::class, 'index2']);
Route::get('/payment{id}', [ProductController::class, 'payment']);
Route::post('/payment', [ProductController::class, 'store']);


Route::get('/try', [JoinTableController::class, 'index']);

// admin
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'handle'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'handle'])->name('login');

Route::post('/logout', [LogoutController::class, 'handle'])->name('logout');


Route::middleware(['auth'])->group(function(){
    Route::get('admin',[AdminController::class, 'index'])->name('admin');

    Route::get('/addproduct',[AdminController::class, 'add'])->name('addpackage');
    Route::post('/addproduct',[AdminController::class, 'create']);

    Route::get('/edit/{id}',[AdminController::class, 'edit']);
    Route::post('/edit',[AdminController::class, 'update']);

    Route::get('deleteproduct/{id}',[AdminController::class, 'delete']);

});
