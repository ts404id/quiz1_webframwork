@extends('layouts.app')

@section('title', 'Data Diri')

@section('content')
<section class="page-heading">
    <p class="eyebrow">02 / DATA DIRI</p>
    <h1>Lebih dekat,<br><em>lebih mengenal.</em></h1>
    <p class="intro">Perkenalan singkat tentang aku dan hal-hal yang membuatku tertarik untuk terus belajar.</p>
</section>
<section class="about-grid">
    <dl class="biodata">
        {{-- Satu pasangan label dan nilai ditampilkan pada setiap perulangan. --}}
        @foreach ($dataDiri as $label => $nilai)
            <div class="data-row">
                <dt>{{ $label }}</dt>
                <dd>{{ $nilai }}</dd>
            </div>
        @endforeach
    </dl>
</section>
@endsection
