<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
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

//make a route for index on main-menu folder
Route::get('/menu', function () {
    return view('main-menu.index');
});
Route::get('/ruang-kelas', [KelasController::class, 'index']);
//make a route for index on ruang-lab folder
Route::get('/ruang-lab', [KelasController::class, 'indexLab']);
//make a route for index on room-select-confirm folder
Route::get('/room-select-confirm', function () {
    return view('room-select-confirm.index');
});

//make a route for call check function on mahaasiswa controller
Route::post('/mahasiswa/check', [MahasiswaController::class, 'check']);