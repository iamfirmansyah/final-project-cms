<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::prefix('transaction')->group(function () {
    Route::get('/add', [App\Http\Controllers\Admin\TransactionController::class, 'add'])->name('transaction-add');
    Route::post('/store', [App\Http\Controllers\Admin\TransactionController::class, 'store'])->name('transaction-store');
});

Route::prefix('products')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products');
    Route::get('/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('products-edit');
    Route::get('/new/add', [App\Http\Controllers\Admin\ProductController::class, 'add'])->name('products-add');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('products-update');
    Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('products-store');
});

Route::get('/login-test', function() {
    return view('login.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

