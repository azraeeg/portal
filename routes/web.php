<?php

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
});
Route::get('/demo-admin-lte', function () {
    return view('demo_page');
});
Route::get('/halo', [App\Http\Controllers\DummyController::class, 'index'])->name('halo');

// ===========================portal================
Route::get('/portal-apk', [App\Http\Controllers\PortalController::class, 'portal'])->name('portal-list');

// ===========================poli==================
Route::get('/antrian-poli/{id_lorong}', [App\Http\Controllers\PoliController::class, 'poli'])->name('poli-list');
Route::get('/json-poli/{id_lorong}',[App\Http\Controllers\PoliController::class, 'cari_poli'])->name('cari-poli');
Route::get('/json-antrian/{id_antrian}',[App\Http\Controllers\PoliController::class, 'cari_antrian'])->name('cari-antrian');
Route::get('/json-poli-admin/{id_lorong}',[App\Http\Controllers\PoliController::class, 'cari_poli_admin'])->name('cari-poli-admin');
Route::get('/admin-antrian/{id_lorong}',[App\Http\Controllers\PoliController::class, 'poli_admin'])->name('admin-poli');
Route::get('/create-poli', [App\Http\Controllers\PoliController::class, 'create_poli'])->name('create-poli');
Route::post('/store-poli', [App\Http\Controllers\PoliController::class, 'store_poli'])->name('store-poli');
Route::post('/update-no-antri/{id_lorong}', [App\Http\Controllers\PoliController::class, 'updateNoAntri'])->name('update-no-antri');
Route::post('/reset-no-antri/{id_lorong}', [App\Http\Controllers\PoliController::class, 'resetNoAntri'])->name('reset-no-antri');

// ===========================kamar==================
Route::get('/info-kamar/{kode_ruang}', [App\Http\Controllers\KamarController::class, 'kamar'])->name('kamar-list');
Route::get('/json-status/{id_status}',[App\Http\Controllers\KamarController::class, 'cari_status'])->name('cari-status');