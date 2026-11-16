<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('welcome') }}" aria-label="Brahadya, halaman utama">brahadya<span>.</span></a>
        <nav aria-label="Menu utama">
            <a href="{{ route('welcome') }}" @if(request()->routeIs('welcome')) aria-current="page" @endif>Welcome</a>
            <a href="{{ route('data-diri') }}" @if(request()->routeIs('data-diri')) aria-current="page" @endif>Data Diri</a>
            <a href="{{ route('gallery') }}" @if(request()->routeIs('gallery')) aria-current="page" @endif>Gallery</a>
        </nav>
    </div>
</header>
