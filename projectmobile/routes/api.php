<?php

use App\Http\Controllers\JadwalPelajaranControllerApi;
use App\Http\Controllers\JenisKomiteControllerApi;
use App\Http\Controllers\KelasControllerApi;
use App\Http\Controllers\NilaiControllerApi;
use App\Http\Controllers\PelajaranControllerApi;
use App\Http\Controllers\PembayaranKomiteControllerApi;
use App\Http\Controllers\PengumumanControllerApi;
use App\Http\Controllers\UserControllerApi;
use App\Http\Controllers\UserGuruControllerApi;
use App\Http\Controllers\UserPembayaranControllerApi;
use App\Http\Controllers\UserSistemControllerApi;
use App\Http\Controllers\UserSiswaControllerApi;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::resource('user', UserControllerApi::class);
Route::resource('sistem', UserPembayaranControllerApi::class);
Route::resource('pembayaran', UserSistemControllerApi::class);
Route::resource('guru', UserGuruControllerApi::class);
Route::resource('siswa', UserSiswaControllerApi::class);

Route::resource('jadwalPelajaran', JadwalPelajaranControllerApi::class);
Route::resource('jenisKomite', JenisKomiteControllerApi::class);
Route::resource('nilai', NilaiControllerApi::class);
Route::resource('pembayaranKomite', PembayaranKomiteControllerApi::class);
Route::resource('pengumuman', PengumumanControllerApi::class);
Route::resource('pelajaran', PelajaranControllerApi::class);
Route::resource('kelas', KelasControllerApi::class);


