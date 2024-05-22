<?php

use App\Http\Controllers\pengaduanController;
use App\Models\pengaduan;
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



// dhasboard
Route::get('/', function () {
    return view('admin.home');
})->name('home');
// edn dhasboard

// tabel
Route::prefix('/')->group(function() {
    Route::prefix('tabel')->group(function() {
        Route::get('pengaduan', [PengaduanController::class, 'index'])->name('tabel');
        Route::get('/add', [PengaduanController::class, 'addMethod'])->name('add');
    });
});
// end tabel



