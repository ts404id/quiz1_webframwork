@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="page-heading">
    <p class="eyebrow">03 / GALLERY</p>
    <h1>Ruang<br><em>Gabut Saya.</em></h1>
    <p class="intro">Ini adalah sedikit gallery saya secara singkat</p>
</section>
<section class="gallery-grid" aria-label="Kumpulan gambar">
    {{-- Satu kartu dibuat untuk setiap item di array galeri. --}}
    @foreach ($galeri as $item)
        <figure class="gallery-card">
            <a href="{{ asset('images/' . $item['gambar']) }}" aria-label="Buka gambar {{ $item['judul'] }}">
                <img src="{{ asset('images/' . $item['gambar']) }}" alt="Ilustrasi contoh: {{ $item['judul'] }}" width="640" height="720">
            </a>
            <figcaption>
                <p class="eyebrow">{{ $item['kategori'] }}</p>
                <h2>{{ $item['judul'] }}</h2>
                <span class="image-note">Gallery Brahadya Praja</span>
            </figcaption>
        </figure>
    @endforeach
</section>
@endsection
