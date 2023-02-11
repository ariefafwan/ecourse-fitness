<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pelatih\PelatihController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        
         //Middleware Admin
         Route::middleware(['admin'])->group(function () {
            Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin');
        });

        //Middleware Pelatih
        Route::middleware(['pelatih'])->group(function () {
            Route::get('pelatih/dashboard', [PelatihController::class, 'index'])->name('pelatih');
        });

        //Middleware User
        Route::middleware(['user'])->group(function () {
            Route::get('user/dashboard', [UserController::class, 'index'])->name('user');
        });

    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});