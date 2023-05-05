<?php

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

//make a route for index on ruang-kelas folder
Route::get('/ruang-kelas', function () {
    return view('ruang-kelas.index');
});
//make a route for index on ruang-lab folder
Route::get('/ruang-lab', function () {
    return view('ruang-lab.index');
});
//make a route for index on room-select-confirm folder
Route::get('/room-select-confirm', function () {
    return view('room-select-confirm.index');
});