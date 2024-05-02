<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TentangWebsite;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

Route::prefix('/admin')->namespace('App\Http\Controllers')->group(function(){
    Route::match(['post', 'get'], 'login', 'AdminController@Login');
    Route::middleware('Admin')->group(function(){
        Route::get('index', 'AdminController@Index');
        Route::get('logout', 'AdminController@Logout');
        Route::get('Pengguna/index', 'PenggunaController@Pengguna');
        Route::get('Pengguna/tambah', 'PenggunaController@Tambah');
        Route::post('Pengguna/index', 'PenggunaController@store');
        Route::get('/Pengguna/hapus/{id}', 'PenggunaController@destroy');
        Route::get('/Pengguna/edit/{id}', 'PenggunaController@edit');
        Route::post('Pengguna/update', 'PenggunaController@update');
        Route::get('VisiMisi/index', 'VisiMisicontroller@index');
        Route::post('VisiMisi/index', 'VisiMisiController@store');
        Route::get('TentangWebsite/index', 'TentangWebsite@index');
        Route::post('TentangWebsite/index', 'TentangWebsite@store');
        Route::get('artikel/index', 'ArtikelController@index');
        Route::get('artikel/tambah', 'ArtikelController@create');
        Route::post('artikel/tambah', 'ArtikelController@store');
        Route::get('/artikel/hapus/{id}', 'ArtikelController@destroy');
        Route::get('/artikel/edit/{id}', 'ArtikelController@edit');
        Route::post('artikel/update', 'ArtikelController@update');
        Route::get('kategoriartikel/index', 'KategoriController@index');
        Route::get('kategoriartikel/tambah', 'KategoriController@create');
        Route::post('kategoriartikel/tambah', 'KategoriController@store');
        Route::get('/kategoriartikel/hapus/{id}', 'KategoriController@destroy')->name('hapuskategori');
        Route::get('/kategoriartikel/edit/{id}', 'KategoriController@edit')->name('editkategori');
        Route::post('kategoriartikel/update/{id}', 'KategoriController@update')->name('updatekategori');
    });
});

Route::get('/tentang', [TentangWebsite::class, 'usertentang'])->name('tentang');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');


Route::get('/visimisi', [VisiMisiController::class, 'uservisimisi'])->name('visimisi');


Route::get('/guru', function () {
    return view('guru');
})->name('guru');

Route::get('/kelas', function () {
    return view('kelas');
})->name('kelas');

Route::get('/ekskul', function () {
    return view('ekskul');
})->name('ekskul');


// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     //route login
//     Route::get('index', [AdminController::class, 'Login'])->name('index');
// });

