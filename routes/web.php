<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front;

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

// CALON PENDAFTAR

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/pendaftaran', [Front\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran/store', [Front\PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/konfirmasi', [Front\KonfirmasiController::class, 'index'])->name('konfirmasi');

Route::get('/masuk', [Front\MasukController::class, 'index'])->name('masuk');


// LOGIN

Route::get('/siswa', function () {
    return view('pages/siswa/index');
});

Route::get('/siswa/pengumuman', function () {
    return view('pages/siswa/pengumuman');
});

Route::get('/siswa/daftar-ulang', function () {
    return view('pages/siswa/daftar-ulang');
});

// ADMIN

Route::get('/admin', function () {
    return view('pages/admin/index');
});

Route::get('/admin/siswa', function () {
    return view('pages/admin/siswa/index');
});

Route::get('/admin/siswa/buat', function () {
    return view('pages/admin/siswa/buat');
});

Route::get('/admin/siswa/{id}', function () {
    return view('pages/admin/siswa/detail');
});

Route::get('/admin/siswa/{id}/ubah', function () {
    return view('pages/admin/siswa/ubah');
});

Route::get('/admin/pengumuman', function () {
    return view('pages/admin/pengumuman/index');
});
