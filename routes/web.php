<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('landing'); 
});

Route::get('/hallo', function() {
    return "Hallo Nama Saya Dea Nurita Febriana!";
});

// tugas 22 "tugas":unknown word.
Route::get('/tampil', [UserController::class, 'tampilin']);

Route::get('/tambah', [UserController::class, 'tambahin']);

Route::get('/edit', [UserController::class, 'editin']);

Route::get('/detail', [UserController::class, 'detailin']);

// tugas 23
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])-> name('product.index');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])-> name('category.index');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])-> name('user.index');

Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])-> name('role.index');