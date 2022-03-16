<?php

use App\Models\Buku;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\PagesController@home');


Route::resource('buku', 'App\Http\Controllers\BukuController', []);
Route::resource('mahasiswa', 'App\Http\Controllers\MahasiswaController', []);
Route::resource('pegawai', 'App\Http\Controllers\PegawaiController', []);