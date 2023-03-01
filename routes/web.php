<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DaftarPelatihController;
use App\Http\Controllers\Admin\DaftarUserController;
use App\Http\Controllers\Admin\LatihanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pelatih\HasilLatihanController;
use App\Http\Controllers\Pelatih\PelatihController;
use App\Http\Controllers\Pelatih\ProgramController;
use App\Http\Controllers\Pelatih\RumusController;
use App\Http\Controllers\Pelatih\TerimaController;
use App\Http\Controllers\User\AspekController;
use App\Http\Controllers\User\EditUserController;
use App\Http\Controllers\User\HasilController;
use App\Http\Controllers\User\PermintaanController;
use App\Http\Controllers\User\UserController;
use App\Models\Berita;
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
    $berita = Berita::All();
    return view('welcome', compact('berita'));
});

Route::resource('berita', BeritaController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        
         //Middleware Admin
         Route::middleware(['admin'])->group(function () {
            Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin');
            Route::resource('admin/daftarpelatih', DaftarPelatihController::class);
            Route::resource('admin/daftaruser', DaftarUserController::class);
            Route::resource('admin/latihan', LatihanController::class);
        });

        //Middleware Pelatih
        Route::middleware(['pelatih'])->group(function () {
            Route::get('pelatih/dashboard', [PelatihController::class, 'index'])->name('pelatih');
            Route::resource('pelatih/rumus', RumusController::class);
            Route::resource('pelatih/terima', TerimaController::class);
            Route::get('pelatih/diterima', [PelatihController::class, 'terima'])->name('diterima');
            Route::get('pelatih/ditolak', [PelatihController::class, 'tolak'])->name('ditolak');
            Route::resource('pelatih/program', ProgramController::class);
            Route::resource('pelatih/selesai', HasilLatihanController::class);
        });

        //Middleware User
        Route::middleware(['user'])->group(function () {
            Route::get('user/dashboard', [UserController::class, 'index'])->name('user');
            Route::resource('user/edituser', EditUserController::class);
            Route::resource('user/permintaan', PermintaanController::class);
            Route::resource('user/hasil', HasilController::class);
            Route::resource('user/aspek', AspekController::class);
        });

    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});