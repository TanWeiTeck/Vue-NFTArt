<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\JoinTableController;
// email verification
use App\Http\Controllers\Auth\VerificationController;



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

// admin
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'handle'])->name('login');


 // Email verification
Route::middleware(['auth'])->group(function(){
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

// Account verified
Route::middleware(['auth','verified'])->group(function(){

    Route::post('/logout', [LogoutController::class, 'handle'])->name('logout');

    Route::get('/admin',[AdminController::class, 'index'])->name('admin');

    Route::get('/addproduct',[AdminController::class, 'add'])->name('addpackage');
    Route::post('/addproduct',[AdminController::class, 'create']);

    Route::get('deleteproduct/{id}',[AdminController::class, 'delete']);
});
