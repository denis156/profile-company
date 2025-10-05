<?php

use App\Livewire\LandingPage\Mitra;
use App\Livewire\LandingPage\Galeri;
use App\Livewire\LandingPage\Kontak;
use App\Livewire\LandingPage\Produk;
use App\Livewire\LandingPage\Beranda;
use App\Livewire\LandingPage\Layanan;
use App\Livewire\LandingPage\Tentang;
use Illuminate\Support\Facades\Route;

Route::get('/', Beranda::class)->name('beranda');
Route::get('/tentang-kami', Tentang::class)->name('tentang-kami');
Route::get('/layanan', Layanan::class)->name('layanan');
Route::get('/produk', Produk::class)->name('produk');
Route::get('/mitra', Mitra::class)->name('mitra');
Route::get('/galeri', Galeri::class)->name('galeri');
Route::get('/kontak', Kontak::class)->name('kontak');

// Route::get('/', function () {
//     return view('index');
// })->name('index');

