<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongGiamController;
use App\Http\Controllers\PhamNhanController;
use App\Http\Controllers\LichTrinhController;
use App\Http\Controllers\HoSoYTeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('nhan-vien/{id}/phong-giam', [NhanVienController::class, 'xemPhongGiam'])
    ->name('nhan-vien.phong-giam');

    Route::get('/nhan-vien', [NhanVienController::class, 'index'])->name('nhan-vien.index');

    Route::get('/nhan-vien/ca-lam/{caLam}', [NhanVienController::class, 'getNhanVienByCaLam'])->name('nhan-vien.ca-lam');


Route::resource('nhan-vien', NhanVienController::class);
Route::resource('phong-giam', PhongGiamController::class);
Route::resource('pham-nhan', PhamNhanController::class);
Route::resource('lich-trinh', LichTrinhController::class);
Route::resource('ho-so-y-te', HoSoYTeController::class);



require __DIR__.'/auth.php';
