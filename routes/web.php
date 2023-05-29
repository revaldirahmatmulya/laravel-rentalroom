<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Middleware\AdminMiddleware;
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
    return view('landing.landing');
});

//make a route for index on account-confirm folder
Route::get('/confirm', function () {
    return view('account-login-confirm.index');
});


Route::get('/menu/{id}', [MahasiswaController::class, 'menu']);
Route::get('/ruang-kelas', [KelasController::class, 'index']);
//make a route for index on ruang-lab folder
Route::get('/ruang-lab', [KelasController::class, 'indexLab']);
//make route for pengembalian on ruang-kelas folder
Route::get('/pengembalian-kelas', [KelasController::class, 'kelasDipinjam']);
//make route for pengembalian on ruang-lab folder
Route::get('/pengembalian-lab', [KelasController::class, 'labDipinjam']);


//make a route for index on room-select-confirm folder
Route::get('/room-select-confirm', function () {
    return view('room-select-confirm.index');
});

//make a route for call check function on mahaasiswa controller
Route::post('/mahasiswa/check', [MahasiswaController::class, 'check']);

Route::get('/pinjam/{id}', [PeminjamanController::class, 'index']);
Route::post('/pinjam/store/{id}/{code}', [PeminjamanController::class, 'store']);

Route::get('/kembalikan', [PengembalianController::class, 'dipinjam']);
Route::put('/kembalikan/{id}', [PengembalianController::class, 'pengembalian']);

Route::get('/ending', function () {
    return view('ending.index');
});




// Route untuk login admin
Route::prefix('admin')->group(function () {
    // Login routes
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login.submit');
    // Logout route
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
});


// Middleware untuk admin
Route::middleware(['admin'])->group(function () {
    // Route untuk halaman dashboard admin
    Route::get('/admin/dashboard', [PeminjamanController::class, 'admin'])->name('admin.dashboard');
    // Tambahkan route lainnya sesuai kebutuhan
});