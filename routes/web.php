<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

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
    return redirect()->route('toko.index');
});

Route::controller(TokoController::class)->group(function () {
    Route::get('/', 'index')->name('toko.index');
    Route::get('/toko', 'index')->name('toko.index');
    Route::get('/toko/create', 'create')->name('toko.create');
    Route::post('/toko', 'store')->name('toko.store');
    Route::get('/toko/{id}', 'show')->name('toko.show');
    Route::get('/toko/{id}/edit', 'edit')->name('toko.edit');
    Route::put('/toko/{id}', 'update')->name('toko.update');
    Route::delete('/toko/{id}', 'destroy')->name('toko.destroy');
});

Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk/{id}/create', 'create')->name('produk.create');
    Route::post('/produk/{id}', 'store')->name('produk.store');
    Route::get('/produk/{id}', 'show')->name('produk.show');
    Route::get('/produk/{id}/{toko_id}/edit', 'edit')->name('produk.edit');
    Route::put('/produk/{id}/{toko_id}', 'update')->name('produk.update');
    Route::delete('/produk/{id}/{toko_id}', 'destroy')->name('produk.destroy');
});
