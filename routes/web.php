<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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
    return view('welcome');
});
Route::resource('mahasiswas', MahasiswaController::class);
Route::get('/search', [MahasiswaController::class, 'search']);
route::get('mahasiswa/{mahasiswa}/khs', [MahasiswaController::class, 'khs'])->name('mahasiswa.khs');
route::get('mahasiswa/{mahasiswa}/cetak_khs', [MahasiswaControll::class, 'cetak_khs'])->name('mahasiswa.cetak_khs');
