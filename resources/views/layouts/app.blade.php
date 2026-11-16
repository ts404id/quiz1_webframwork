<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Brahadya — mahasiswa Informatika yang menyukai teknologi.">
    <title>@yield('title', 'Portofolio') | Brahadya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a class="skip-link" href="#konten">Lewati ke konten</a>
    @include('partials.header')
    <main id="konten" class="container">@yield('content')</main>
    @include('partials.footer')
</body>
</html>
