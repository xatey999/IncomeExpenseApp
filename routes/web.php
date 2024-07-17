<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TransactionController::class, 'display'])->name('transaction.display');
Route::post('/add', [App\Http\Controllers\TransactionController::class, 'store'])->name('transaction.store');
Route::get('/list', [App\Http\Controllers\TransactionController::class, 'list'])->name('transaction.list');
Route::get('/edit/{id}', [\App\Http\Controllers\TransactionController::class, 'edit'])->name('transaction.edit');
Route::post('/update/{id}', [\App\Http\Controllers\TransactionController::class, 'update'])->name('transaction.update');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/transaction', [TransactionController::class, 'display'])->name('transaction.display');
