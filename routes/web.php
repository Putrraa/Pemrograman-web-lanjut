<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat', function(){
    return view('latihan');
});

Route::get('/bio', function() {
    return view('biodata');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/nama', function() {
    return view('nama', ['name' => 'Daffa Putra Prasetya']);
});

Route::get('/nilai1', function () {
    return view('getnilai1');
});

Route::get('/nilai2', function () {
    return view('getnilai2');
});

Route::get('/UTS', function () {
    return view('UTS');
});
Route::get('/bio', function() {
    return view('biodata');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/nama', function() {
    return view('nama', ['name' => 'Daffa Putra Prasetya']);
});

Route::get('/nilai1', function () {
    return view('getnilai1');
});

Route::get('/nilai2', function () {
    return view('getnilai2');
});

Route::get('/UTS', function () {
    return view('UTS');
});

Route::get('home', [PraktikumController::class, 'home']);
Route::get('produk', [ProdukController::class, 'index']);
Route::get('tampil-kategori', [KategoriController::class, 'index']);
Route::get('transaksi', [PraktikumController::class, 'transaction']);
Route::get('laporan', [PraktikumController::class, 'report']);
Route::get('tampil-produk', [ProdukController::class, 'index']);
Route::get('tambah-produk', [ProdukController::class, 'create'])->name('produk.create');
Route::post('tampil-produk', [ProdukController::class, 'store'])->name('produk.store');
Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('tampil-kategori', [KategoriController::class, 'index']);
Route::post('tampil-kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('tambah-kategori', [KategoriController::class, 'create'])->name('kategori.create');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
