<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Route::get('/tampil', [UserController::class, 'tampilin']);

// Route::get('/tambah', [UserController::class, 'tambahin']);

// Route::get('/edit', [UserController::class, 'editin']);

// Route::get('/detail', [UserController::class, 'detailin']);



//edit tugas ke 23 menjadi tugas 24
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Dashboard
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Admin
    Route::middleware('role:admin')->group(function(){

        // Slider
        Route::get('/slider', [SliderController::class, 'index'])->name('slider.index'); // route untuk menampilkan data awal
        Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create'); // route untuk menampilkan form create
        Route::post('/slider', [SliderController::class, 'store'])->name('slider.store'); // route untuk menyimpan data
        Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit'); // route untuk menampilkan form edit
        Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update'); // route untuk mengupdate data
        Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy'); // route untuk menghapus data
    });

    //Staff dan Admin
    Route::middleware('role:admin|staff')->group(function(){

        // Category
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });


    //Staff, Admin, dan Customer
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');

    Route::middleware('role:admin|staff')->group(function(){

        // Product
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    //Admin
    Route::middleware('role:admin')->group(function(){

        // User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        // Role
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/role', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
    });
});