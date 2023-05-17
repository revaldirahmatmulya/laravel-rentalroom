<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
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
Route::post('/pinjam/store/{id}', [PeminjamanController::class, 'store']);

Route::get('/kembali/{id}', [PeminjamanController::class, 'index']);
Route::post('/kembali/store/{id}', [PeminjamanController::class, 'pengembalian']);
