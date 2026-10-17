
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.beranda.index')->name('beranda');
Route::redirect('/beranda', '/', 301)->name('beranda.redirect');
Route::view('/informasi', 'pages.informasi.index')->name('informasi');
Route::view('/layanan', 'pages.layanan.index')->name('layanan');
Route::view('/pesantren', 'pages.pesantren.index')->name('pesantren');
Route::view('/program', 'pages.program.index')->name('program');
Route::view('/media', 'pages.media.index')->name('media');
Route::view('/santripreneur', 'pages.santripreneur.index')->name('santripreneur');
Route::view('/berita', 'pages.berita.index')->name('berita.index');
Route::view('/profil', 'pages.profil.index')->name('profil');
Route::view('/publikasi', 'pages.publikasi.index')->name('publikasi.index');
Route::view('/kemitraan', 'pages.kemitraan.index')->name('kemitraan');
Route::view('/kontak', 'pages.kontak.index')->name('kontak');
Route::view('/legal', 'pages.legal.index')->name('legal');
Route::get('/pencarian', function () {
    return view('pages.pencarian.index', [
        'query' => trim((string) request()->query('q', '')),
    ]);
})->name('pencarian');
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
