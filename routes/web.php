<?php

use Illuminate\Support\Facades\Route;

// Halaman utama mengarah ke menu Welcome.
Route::get('/', function () {
    return redirect()->route('welcome');
});

// {nama?} adalah parameter opsional; nilai default-nya Budiarta.
Route::get('/welcome/{nama?}', function ($nama = 'Brahadya') {
    $profesi = 'Mahasiswa Informatika';
    $deskripsi = 'Saya senang belajar hal baru.';

    // Mengirim variabel dari route ke halaman Blade.
    return view('pages.welcome', compact('nama', 'profesi', 'deskripsi'));
})->name('welcome');

Route::get('/data-diri', function () {
    $dataDiri = [
        'Nama' => 'Brahadya',
        'Program studi' => 'Informatika',
        'Kampus' => 'Institut Bisnis dan Teknologi Indonesia (INSTIKI)',
        'Asal' => 'Abiansemal, Badung',
        'Minat' => 'Teknologi',
    ];

    return view('pages.data-diri', compact('dataDiri'));
})->name('data-diri');

Route::get('/gallery', function () {

    $galeri = [
        ['judul' => 'PANITIA PKKMB 2026', 'kategori' => 'kegiatan kampus', 'gambar' => 'pkkmb.jpeg'],
        ['judul' => 'BINUS UNIVERSITY', 'kategori' => 'sosialisasi', 'gambar' => 'binus.jpeg'],
        ['judul' => 'CAMP DANAU BUYAN', 'kategori' => 'kegiatan organisasi', 'gambar' => 'camp.jpeg'],
        ['judul' => 'PKKMB 2025 INTIKI', 'kategori' => 'kegiatan kampus', 'gambar' => 'pkkmb2025.jpeg'],
        ['judul' => 'HIMA-IF PARAS ICT XI', 'kategori' => 'kegiatan kampus', 'gambar' => 'paras.jpeg'],
        ['judul' => 'BILLIARD', 'kategori' => 'hobby', 'gambar' => 'billiard.jpeg'],
    ];

    return view('pages.gallery', compact('galeri'));
})->name('gallery');
