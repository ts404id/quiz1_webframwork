@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow"><span class="status-dot"></span>PORTOFOLIO SAYA</p>
        <h1>Halo, aku<br><em>{{ $nama }}.</em></h1>
        <p class="role">{{ $profesi }}</p>
        <p class="intro">{{ $deskripsi }}</p>
        <a class="text-link primary-link" href="{{ route('data-diri') }}">Kenali aku <span aria-hidden="true">↗</span></a>
        <a class="text-link" href="{{ route('gallery') }}">Lihat gallery <span aria-hidden="true">→</span></a>
    </div>

</section>
<section class="welcome-bottom" aria-label="Tentang portofolio">
    <p class="eyebrow">SEDIKIT TENTANG AKU</p>
    <p>Dari Abiansemal, aku tertarik terhadap dunia digital/teknologi dari smp hingga sekarang. Dan ingin terus belajar serta lebih menenal secara mendalam.</p>
    <span class="interest-label"></span>
</section>
@endsection
