<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Laporan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// route admin
Route::prefix('/admin')->middleware(['auth', 'verified', 'admin'])->group(function () {

    // dashboard admin
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

    // route tempat
    Route::get('/tempat', [TempatController::class, 'index'])->name('tempat.index');
    Route::get('/tempat/create', [TempatController::class, 'create'])->name('tempat.create');
    Route::post('/tempat', [TempatController::class, 'store'])->name('tempat.store');
    Route::get('/tempat/{param}', [TempatController::class, 'detail'])->name('tempat.detail');
    Route::put('tempat/{param}', [TempatController::class, 'update'])->name('tempat.update');
    Route::delete('tempat/{param}', [TempatController::class, 'delete'])->name('tempat.delete');

    // Barang
    Route::get('/tempat/{param}/barang', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang/{param}', [BarangController::class, 'store'])->name('barang.store');

    // Laporan
    Route::get('/laporan', [ResponController::class, 'index'])->name('respon.index');
    Route::get('/laporan/respon/{param}', [ResponController::class, 'respon'])->name('respon.create');
    Route::get('/laporan/{param}', [ResponController::class, 'store'])->name('respon.store');


});

// route user
Route::prefix('/user')->middleware(['auth', 'verified'])->group(function () {

    // dashboard user
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard.user');
    Route::get('/myreport', [LaporController::class, 'index'])->name('report.index');
    Route::get('/report/area/', [LaporController::class, 'area'])->name('search.area');
    Route::get('/area/report/{param}', [LaporController::class,'create'])->name('create.area');
    Route::get('/barang/report/{param}', [LaporController::class,'report'])->name('report.barang');
    Route::post('/area/report/{param}', [LaporController::class,'store'])->name('report.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
