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

Route::get('/ho-so-y-te/2/{maPhamNhan}', [HoSoYTeController::class, 'show2'])->name('ho-so-y-te.show2');

Route::resource('nhan-vien', NhanVienController::class);
Route::resource('phong-giam', PhongGiamController::class);
Route::resource('pham-nhan', PhamNhanController::class);
Route::resource('lichtrinhs', LichTrinhController::class);
Route::get('/search', [PhamNhanController::class, 'search'])->name('search');


Route::resource('nhan-vien', NhanVienController::class);
Route::resource('phong-giam', PhongGiamController::class);
Route::resource('phamnhans', PhamNhanController::class);
Route::resource('lich-trinh', LichTrinhController::class);
Route::resource('ho-so-y-te', HoSoYTeController::class);

require __DIR__.'/auth.php';
