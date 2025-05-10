<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Redirect root ke halaman aspirasi
Route::get('/', function () {
    return redirect()->route('aspirasi.index');
});

// Route untuk Aspirasi (dapat diakses tanpa login untuk melihat)
Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');

// Route untuk Aspirasi yang membutuhkan autentikasi (tambah dan hapus)
Route::middleware('auth')->group(function () {
    Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
    Route::delete('/aspirasi/{aspirasi}', [AspirasiController::class, 'destroy'])->name('aspirasi.destroy');
});

// Route untuk About
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Route bawaan Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Halaman data yang dilindungi
    Route::get('/data', [DataController::class, 'index'])->name('data.index');
    
    // Tambahkan route-route lain yang perlu autentikasi di sini
    Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
    Route::post('/data', [DataController::class, 'store'])->name('data.store');
});

Route::get('/dashboard', function () {
    return redirect()->route('aspirasi.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';