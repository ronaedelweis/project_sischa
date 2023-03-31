<?php

use App\Http\Controllers\barangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\barangmasukController;

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

Route::get('input', function () {
    return view('inputbarang');
});

Route::get('kelola', function () {
    return view('kelolabarang');
});

Route::get('info', function () {
    return view('infobarang');
});

Route::get('editBarang', function () {
    return view('editbarang');
});

route::resource('barang', barangController::class);
Route::get('/info',[barangController::class, 'index2']);
Route::get('/kelola',[barangController::class, 'index']);
Route::get('/barang/{id}/edit',[barangController::class, 'edit']);
Route::put('/barang/{id}/edit',[barangController::class, 'edit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/barangmasuk', function () {
//     return view('barangmasuk');
// })->middleware(['auth', 'verified'])->name('barangmasuk');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
