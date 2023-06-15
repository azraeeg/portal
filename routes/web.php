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